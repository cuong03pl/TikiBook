<?php
require_once "../../database/database.php";
include "../../utils/utils.php";
$sql = "select * from products";
$query = mysqli_query($con, $sql);


echo "<div class=\"grid grid-cols-5 mt-2 gap-2\">";
while ($result = mysqli_fetch_assoc($query)) {
  echo
  "  <a href=\"\" class=\"bg-white\">
                  <!-- img -->
                  <div class=\"relative\">
                    <img src=\"https://salt.tikicdn.com/ts/upload/f0/68/87/8b851bd4e439a34de96a6152cffcd1b3.png\" alt=\"\" class=\"absolute w-[72px] h-[20px]\" />
                    <img src=\"https://salt.tikicdn.com/cache/280x280/ts/product/5e/a5/89/ae0f5edee46cd401754401435b09c47e.jpg.webp\" alt=\"\" class=\"h-full w-full\" />
                  </div>
    
                  <!-- content -->
                  <div class=\"px-3 py-2 border-b border-gray-300\">
                    <!-- ten sach -->
                    <h3 class=\"font-normal text-xs leading-4 text-gray-700 m-0 break-words\"> " .
    $result["ProductName"] . "
                    </h3>
    
                    <!-- rating  + sold out -->
                    <div class=\"flex mb-[6px] items-center\">
                      <div class=\"flex items-center gap-1\">
                        <span class=\"text-[12px] text-[#808089]\">5</span>
                        <svg class=\"w-3 h-3 text-[#fdd835] dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 22 20\">
                          <path d=\"M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z\" />
                        </svg>
                      </div>
                      <div class=\"w-[1px] h-[14px] bg-gray-100 ml-[2px] mr-[4px]\"></div>
                      <div class=\"flex items-center\">
                        <span class=\"text-[12px] text-[#808089]\">Đã bán " .  convertSoldOut($result["SoldOutCount"]) . "</span>
                      </div>
                    </div>
    
                    <!-- price + discount -->
                    <div class=\"flex items-center\">
                      <span class=\"text-[black] font-medium text-[16px]\"> " . convertMoney($result["Price"]) . " <sub class=\"top-[-5px]\"> ₫</sub></span>
                      <div class=\"ml-1 mt-[3px] text-[12px] text-[#ff424e] font-medium\">
                        -
                        <span class=\"\">" . discount($result["Price"], $result["OldPrice"]) . "%</span>
                      </div>
                    </div>
                  </div>
    
                  <!-- footer -->
                  <div class=\"flex gap-1 px-3 py-2\">
                    <img src=\"https://salt.tikicdn.com/ts/upload/bf/5b/b9/f54345d674f86ab1bc3f8a68e91ee049.png\" alt=\"\" class=\"w-[32px] h-[16px]\" />
                    <span class=\"font-normal text-xs leading-4 text-[#808089]\">Giao siêu tốc 2h</span>
                  </div>
                </a>
                ";
};
echo "</div>";

// <!-- Kết thúc product -->
echo "
<!-- pagination -->
<div class=\"flex justify-center mt-[70px] mb-[20px]\">
  <nav class=\"isolate inline-flex -space-x-px rounded-md shadow-sm\" aria-label=\"Pagination\">
    <a href=\"#\" class=\"relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">
      <span class=\"sr-only\">Previous</span>
      <svg class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
        <path fill-rule=\"evenodd\" d=\"M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z\" clip-rule=\"evenodd\" />
      </svg>
    </a>
    <!-- Current: \"z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\", Default: \"text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0\" -->
    <a href=\"#\" aria-current=\"page\" class=\"relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">1</a>
    <a href=\"#\" class=\"relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">2</a>
    <a href=\"#\" class=\"relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex\">3</a>
    <span class=\"relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0\">...</span>
    <a href=\"#\" class=\"relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex\">8</a>
    <a href=\"#\" class=\"relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">9</a>
    <a href=\"#\" class=\"relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">10</a>
    <a href=\"#\" class=\"relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">
      <span class=\"sr-only\">Next</span>
      <svg class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
        <path fill-rule=\"evenodd\" d=\"M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z\" clip-rule=\"evenodd\" />
      </svg>
    </a>
  </nav>
</div>";
