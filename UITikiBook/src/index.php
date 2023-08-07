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
          <?php
          include_once "../../UITikiBook/src/Filter/Rating.php"

          ?>
          <!-- kết thúc đánh giá -->

          <!-- Bắt đầu  giá -->
          <?php
          include_once "../../UITikiBook/src/Filter/Price.php"
          ?>

          <!-- kết thúc  giá -->

          <!-- Bắt đầu Nhà phát hành  -->
          <?php

          include_once "../../UITikiBook/src/Filter/IssuingCompany.php"
          ?>
          <!-- kết thúc  Nhà phát hành  -->

          <!-- Bắt đầu giao hàng -->
          <!-- <div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
            <h4 class="text-[14px] font-medium pb-3">Giao hàng</h4>
            <div class="flex items-center gap-2 mb-3">
              <input type="radio" name="" id="" checked="true" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
            <div class="flex items-center gap-2 mb-3">
              <input type="radio" name="" id="" />
              <span class="text-[12px] font-normal text-[#38383d]">Nhà sách Fahasa</span>
            </div>
          </div> -->
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