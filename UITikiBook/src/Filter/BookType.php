<?php
require_once "../../database/database.php";

$sql = "select * from booktype";
$query = mysqli_query($con, $sql);
$param = null;


$q = isset($_GET["q"]) ? $_GET["q"] : null;
if (!is_null($q)) {
    $param .= "&q=$q";
}
$IssuingCompanyID = isset($_GET["IssuingCompanyID"]) ? $_GET["IssuingCompanyID"] : null;
if (!is_null($IssuingCompanyID)) {
    $param .= "&IssuingCompanyID=$IssuingCompanyID";
}
$minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
if (!is_null($minPrice)) {
    $param .= "&minPrice=$minPrice";
}
$maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
if (!is_null($maxPrice)) {
    $param .= "&maxPrice=$maxPrice";
}
$rating = isset($_GET["rating"]) ? $_GET["rating"] : null;
if (!is_null($rating)) {
    $param .= "&rating=$rating";
}

echo "<div class=\"border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3\">
<h4 class=\"text-[14px] font-medium pb-3\">Danh Mục Sản Phẩm</h4>";
echo " <a href=\"index.php\" class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> Trang Chủ </a>";

while ($result = mysqli_fetch_assoc($query)) {
    echo " <a href=\"index.php?booktypeid=" . $result["BookTypeID"] . "$param" . "\"
     class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> " . $result["BookTypeName"] . "</a>";
}
echo "</div>";
