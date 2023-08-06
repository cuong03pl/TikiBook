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

function handleQuerySQL($booktypeid, $IssuingCompanyID)
{
  $sql = "select * from products ";
  if (!is_null($booktypeid) || !is_null($IssuingCompanyID)) $sql .= " where ";
  if (!is_null($booktypeid)) $sql .= "BookTypeID = $booktypeid ";
  if (!is_null($IssuingCompanyID)) $sql .= "and IssuingCompanyID = $IssuingCompanyID ";

  return $sql;
}
