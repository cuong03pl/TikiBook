<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="./dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/tippyCustom.css" />

</head>

<body>
  <div>
    <?php
    include "../../includes/header.php"
    ?>

  </div>
  <div class="bg-[#efefef] py-4">
    <div class="w-[1270px] m-auto">
      <div class="grid grid-cols-5 gap-3">
        <!-- ben trai -->
        <div class="bg-white">
          <!-- Danh mục sản phẩm -->
          <?php
          include_once "../../UITikiBook/src/Filter/BookType.php"
          ?>
          <!-- kết thúc danh mục sản phẩm -->
          <!-- Bắt đầu đánh giá -->
          <div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
            <h4 class="text-[14px] font-medium pb-3">Đánh giá</h4>
            <div class="flex gap-[2px] items-center my-[5px]">
              <span class="flex items-center">
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span class="text-[13px] font-normal ml-1">từ 5 sao</span>
            </div>
            <div class="flex gap-[2px] items-center my-[5px]">
              <span class="flex items-center">
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span class="text-[13px] font-normal ml-1">từ 5 sao</span>
            </div>
            <div class="flex gap-[2px] items-center my-[5px]">
              <span class="flex items-center">
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span>
                <svg class="w-3 h-3 text-[#fdd835] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </span>
              <span class="text-[13px] font-normal ml-1">từ 5 sao</span>
            </div>
          </div>
          <!-- kết thúc đánh giá -->

          <!-- Bắt đầu  giá -->
          <div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
            <h4 class="text-[14px] font-medium pb-3">Giá</h4>
            <!-- selected   -->
            <div>
              <a href="" class="border-[#1a94ff] border-[1px] border-solid rounded-xl bg-blue-100 text-blue-600 text-xs leading-4 inline-block relative mb-1 px-3 py-1">40.000 -> 120.000
              </a>
              <a href="" class="rounded-xl bg-gray-200 text-xs leading-4 inline-block relative text-gray-800 mb-1 px-3 py-1">Dưới 40.000
              </a>
              <a href="" class="rounded-xl bg-gray-200 text-xs leading-4 inline-block relative text-gray-800 mb-1 px-3 py-1">40.000 -> 120.000
              </a>
              <a href="" class="rounded-xl bg-gray-200 text-xs leading-4 inline-block relative text-gray-800 mb-1 px-3 py-1">40.000 -> 120.000
              </a>
            </div>

            <!-- chọn khoảng giá -->

            <div>
              <div class="text-gray-600 text-xs pb-2 mt-1">
                <span class="mt-2 pb-2 block">Chọn khoảng giá</span>

                <div class="flex items-center gap-1">
                  <input pattern="[0-9]*" placeholder="Giá từ" value="0" class="w-20 h-8 bg-white rounded text-left outline-none text-xs flex-1 border border-gray-400 px-2" />
                  <span>-</span>
                  <input pattern="[0-9]*" placeholder="Giá từ" value="0" class="w-20 h-8 bg-white rounded text-left outline-none text-xs flex-1 border border-gray-400 px-2" />
                </div>

                <button type="submit" class="bg-white border border-blue-500 text-xs text-blue-500 w-full mt-[8px] rounded-md px-2 py-2">
                  Áp dụng
                </button>
              </div>
            </div>
          </div>
          <!-- kết thúc  giá -->

          <!-- Bắt đầu Nhà cung cấp -->
          <div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
            <h4 class="text-[14px] font-medium pb-3">Nhà cung cấp</h4>
            <div class="flex items-center gap-2 mb-3">
              <input type="checkbox" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
            <div class="flex items-center gap-2 mb-3">
              <input type="checkbox" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
            <div class="flex items-center gap-2 mb-3">
              <input type="checkbox" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
            <div class="flex items-center gap-2 mb-3">
              <input type="checkbox" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
          </div>
          <!-- kết thúc  Nhà cung cấp -->

          <!-- Bắt đầu giao hàng -->
          <div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
            <h4 class="text-[14px] font-medium pb-3">Giao hàng</h4>
            <div class="flex items-center gap-2 mb-3">
              <input type="radio" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
            <div class="flex items-center gap-2 mb-3">
              <input type="radio" name="" id="" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
          </div>
          <!-- kết thúc  giao hàng -->
        </div>

        <!--  bên phải -->
        <div class="col-span-4">
          <div class="bg-white">
            <div class="px-4 py-3 inline font-normal text-gray-700 text-[20px]">
              Nhà Sách Tiki
            </div>

            <!-- Bắt đầu  filter -->
            <ul class="flex gap-4">
              <li class="px-4 py-3">
                <a href="" class="text-[#0b74e5]">Phổ Biến</a>
              </li>
              <li class="px-4 py-3">
                <a href="" class="">Phổ Biến</a>
              </li>
              <li class="px-4 py-3">
                <a href="" class="">Phổ Biến</a>
              </li>
              <li class="px-4 py-3">
                <a href="" class="">Phổ Biến</a>
              </li>
            </ul>
          </div>

          <!-- Bắt đầu product -->
          <!-- 1 item -->
          <?php
          include "../../UITikiBook/src/productList.php"
          ?>


          <!-- pagination -->

        </div>
      </div>
    </div>
  </div>
</body>

</html>