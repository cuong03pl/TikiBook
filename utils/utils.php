<?php

function showAlert($message)
{
  echo "<script type='text/javascript'>alert('$message');</script>";
}
function discount($price, $oldPrice)
{
  $a = $oldPrice - $price;
  $discount = ($a / $oldPrice) * 100;
  return round($discount);
}

function convertMoney($money)
{
  if ($money >= 1000 && is_numeric($money)) {
    $formattedNumber = number_format($money, 0, '.', '.');
    return $formattedNumber;
  }
  return $money;
}

function convertSoldOut($soldOutCount)
{
  if ($soldOutCount >= 1000 && is_numeric($soldOutCount)) {

    return round($soldOutCount / 1000, 1) . 'k';
  }

  return $soldOutCount;
}

function handleQuerySQL($page)
{
  $booktypeid = isset($_GET["booktypeid"]) ? $_GET["booktypeid"] : null;
  $IssuingCompanyID = isset($_GET["IssuingCompanyID"]) ? $_GET["IssuingCompanyID"] : null;
  $minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
  $maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
  $rating = isset($_GET["rating"]) ? $_GET["rating"] : null;
  $q = isset($_GET["q"]) ? $_GET["q"] : null;
  $sql = "select * from products ";

  if (!is_null($q) || !is_null($booktypeid) || !is_null($IssuingCompanyID) || !is_null($maxPrice) || !is_null($minPrice) || !is_null($rating)) $sql .= " where ";

  if (!is_null($q)) $sql .= "ProductName like '%$q%' ";


  if (!is_null($booktypeid)) {
    if (!is_null($q)) {

      $sql .= " and BookTypeID = $booktypeid ";
    } else  $sql .= "BookTypeID = $booktypeid ";
  }

  if (!is_null($IssuingCompanyID)) {
    if (!is_null($booktypeid) || !is_null($q))  $sql .= "and IssuingCompanyID = $IssuingCompanyID ";
    else  $sql .= " IssuingCompanyID = $IssuingCompanyID ";
  }

  if (!is_null($maxPrice) || !is_null($minPrice)) {
    if (!is_null($IssuingCompanyID) || !is_null($booktypeid) || !is_null($q)) {
      if (is_null($minPrice)) $sql .= " and Price < $maxPrice ";
      else $sql .= "and Price between $minPrice and $maxPrice ";
    } else $sql .= " Price between $minPrice and $maxPrice ";
  }

  if (!is_null($rating)) {
    if (!is_null($IssuingCompanyID) || !is_null($booktypeid) || !is_null($maxPrice) || !is_null($minPrice) || !is_null($q)) {
      $sql .= " and rating >= $rating ";
    } else {
      $sql .= " rating >= $rating ";
    }
  }

  if (!is_null($page)) {
    $dongbatdau = 5 * ($page - 1);
    $sql .=  "  LIMIT $dongbatdau , 5";
  }


  return $sql;
}
