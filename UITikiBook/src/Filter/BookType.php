<?php
require_once "../../database/database.php";

$sql = "select * from booktype";
$query = mysqli_query($con, $sql);


echo "<div class=\"border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3\">
<h4 class=\"text-[14px] font-medium pb-3\">Danh Mục Sản Phẩm</h4>";
while ($result = mysqli_fetch_assoc($query)) {
    echo " <a href=\"booktypeid=" . $result["BookTypeID"] . " \" class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> " . $result["BookTypeName"] . "</a>";
}
echo "</div>";
