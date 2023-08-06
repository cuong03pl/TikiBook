<?php
require_once "../../database/database.php";

$sql = "select * from booktype";
$query = mysqli_query($con, $sql);
$IssuingCompanyID = isset($_GET["IssuingCompanyID"]) ? $_GET["IssuingCompanyID"] : null;
$paramName = null;
if (!is_null($IssuingCompanyID)) {
    $paramName = "&IssuingCompanyID=";
}

echo "<div class=\"border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3\">
<h4 class=\"text-[14px] font-medium pb-3\">Danh Mục Sản Phẩm</h4>";
echo " <a href=\"index.php\" class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> Trang Chủ </a>";

while ($result = mysqli_fetch_assoc($query)) {
    echo " <a href=\"index.php?booktypeid=" . $result["BookTypeID"] . "$paramName" . $IssuingCompanyID . "\"
     class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> " . $result["BookTypeName"] . "</a>";
}
echo "</div>";
