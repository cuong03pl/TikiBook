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

function handleQuerySQL($booktypeid, $IssuingCompanyID, $minPrice, $maxPrice, $rating)
{
  echo $minPrice;
  $sql = "select * from products ";

  if (!is_null($booktypeid) || !is_null($IssuingCompanyID) || !is_null($maxPrice) || !is_null($minPrice) || !is_null($rating)) $sql .= " where ";

  if (!is_null($booktypeid)) $sql .= "BookTypeID = $booktypeid ";

  if (!is_null($IssuingCompanyID)) {
    if (!is_null($booktypeid))  $sql .= "and IssuingCompanyID = $IssuingCompanyID ";
    else  $sql .= " IssuingCompanyID = $IssuingCompanyID ";
  }

  if (!is_null($maxPrice) || !is_null($minPrice)) {
    if (!is_null($IssuingCompanyID) || !is_null($booktypeid)) {
      if (is_null($minPrice)) $sql .= " and Price < $maxPrice ";
      else $sql .= "and Price between $minPrice and $maxPrice ";
    } else $sql .= " Price between $minPrice and $maxPrice ";
  }

  if (!is_null($rating)) {
    if (!is_null($IssuingCompanyID) || !is_null($booktypeid) || !is_null($maxPrice) || !is_null($minPrice)) {
      $sql .= " and rating >= $rating ";
    } else {
      $sql .= " rating >= $rating ";
    }
  }


  return $sql;
}
