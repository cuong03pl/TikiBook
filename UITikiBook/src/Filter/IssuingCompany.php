<form method="get" class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
    <h4 class="text-[14px] font-medium pb-3">Nhà phát hành</h4>
    <?php
    $sql = "select * from issuingcompany";
    $query = mysqli_query($con, $sql);

    $q = isset($_GET["q"]) ? $_GET["q"] : null;
    if ($q) {
        echo "<input type=\"hidden\" name=\"q\" value=\"$q\">";
    }
    $bookTypeId = isset($_GET["booktypeid"]) ? $_GET["booktypeid"] : null;
    if ($bookTypeId) {
        echo "<input type=\"hidden\" name=\"booktypeid\" value=\"$bookTypeId\">";
    }

    $minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
    if ($minPrice) {
        echo "<input type=\"hidden\" name=\"minPrice\" value=\"$minPrice\">";
    }

    $maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
    if ($maxPrice) {
        echo "<input type=\"hidden\" name=\"maxPrice\" value=\"$maxPrice\">";
    }
    $rating = isset($_GET["rating"]) ? $_GET["rating"] : null;
    if ($maxPrice) {
        echo "<input type=\"hidden\" name=\"rating\" value=\"$rating\">";
    }
    while ($result = mysqli_fetch_assoc($query)) {
        $IssuingCompanyID = $result["IssuingCompanyID"];
        $checked = isset($_GET["IssuingCompanyID"]) && $_GET["IssuingCompanyID"] == $IssuingCompanyID;
        echo " <div class=\"flex items-center gap-2 mb-3\">
              <input  onChange={form.submit()}  type=\"radio\" 
              name=\"IssuingCompanyID\" 
              id=" . $result["IssuingCompanyID"] . " 
              value=\"" . $result["IssuingCompanyID"] . "\" 
              " . ($checked ? "checked" : "") . "
              />
              <span class=\"text-[12px] font-normal text-[#38383d]\">" . $result["IssuingCompanyName"] . "</span>
              </div>";
    }

    ?>
</form>