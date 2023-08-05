<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
  <!-- CDN font-awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CDN animate css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- CDN tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- tippyCustom.css -->
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT - Phần sidebar (menu bên trái) -->
    <div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
      <!-- LEFT - Logo + ADMIN PAGE -->
      <div class="user-panel flex pb-4 my-4 gap-[10px]">
        <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
          <a href="admin.php"><img class="block w-full" src="./Nhom_14_Logo.png" alt="Nhóm 14" /></a>

        </div>
        <div class="p-[5px] pb-0 pt-[8px]">
          <span class="text-[#c2c7d0] hover:text-[#fff]">
            <a href="admin.php">ADMIN PAGE</a>
          </span>
        </div>
      </div>
      <!-- LEFT - Input Search -->

      <!-- LEFT - Bottom slidebar -->
      <nav class="mt-2 flex flex-col justify-between">
        <!-- LEFT - Danh sách các chức năng quản lý -->
        <ul class="feature flex flex-col">

          <!-- LEFT - 3. Quản lý danh mục -->
          <li class="nav-item flex w-full  flex-col">
            <a class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-th" aria-hidden="true"></i>
              <p>
                Quản lý danh mục
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./CategoryList.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả danh mục</p>
                </a>
              </li>
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./AddCategory.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <!-- RIGHT - Phần content (nội dung chính) -->
    <div class="basis-auto w-[100%] bg-[#f4f6f9]">
      <nav class="p-4 flex items-center justify-between bg-white">
        <ul>
          <li>
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
        <ul class="flex gap-3">
          <li>
            <span>Xin chào, </span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>
      <!--  -->
      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Dashboard
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
      </section>

      <!-- SECTION CONTENT-->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
          <h1>Table</h1>
        </div>
    </div>
    </section>
  </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>