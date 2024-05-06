<?php
    require 'ketnoiDataBase.php';
    $sql = "SELECT * FROM `sanpham` WHERE 1";
    $querry = mysqli_query($conn,$sql);
    //var_dump($querry); // kiểm tra gì gì đó ... ???


    if(isset($_POST["submit"]) ){
        $tensp = $_POST["ten"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        $hinhanh = $_FILES['hinhanh']['name'];
        //tạo thư mục => note, tạo thư muc images ở bên ngoài trước nhé
        $target_dir = "./images/";
        //tạo đường dẫn dến file
        $target_file = $target_dir.$hinhanh;
        //check đủ các trường thông tin
        if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
            $sql = "INSERT INTO `sanpham`(`masp`, `tensp`, `gia`, `mota`, `imgURL`) 
            VALUES (NULL,'$tensp','$gia','$mota','$hinhanh')";
            
            mysqli_query($conn,$sql);
            //echo "<script>alert('bạn đã thêm thành công')</script>";
            header("Location: products.php");
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <style>
    <?php include 'style.css'; ?>
    </style>
    <title>Book Management</title>
</head>
<body>
    <!-- Header -->
    <header id="home" class="container px-5 pt-8 pb-3 mx-auto">
        <nav class="bg-white px-2 sm:px-4 py-2.5 rounded shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px]">
        <div class="container flex flex-wrap justify-between items-center mx-auto font-mono">
            <a href="http://localhost:8080/BookStore/home.php" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                Natasa.
            </span>
            </a>

            <div class="flex items-center">
            <button
                id="menu-toggle"
                type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            >
                <span class="sr-only">Open main menu</span>
                <!-- Hamburger icon -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                />
                </svg>
            </button>
            </div>

            <div
            class="w-full md:block md:w-auto hidden"
            id="mobile-menu"
            >
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                <a
                    href="http://localhost:8080/BookStore/home.php"
                    class="block text-lg py-2 pr-4 pl-4 text-gray-700 border-b border-gray-100  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    aria-current="page"
                >
                    Home
                </a>
                </li>
                <li>
                <a
                    href="#book"
                    class="block text-lg py-2 pr-4  pl-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                >
                    Management
                </a>
                </li>
            </ul>
            </div>

        </div>
        </nav>
    </header>
    <section class="container px-5 py-3 mx-auto">
        <!--Add Book Button-->
        <div class="flex md:justify-end justify-center m-5">
            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
            Add Product
            </button>
        </div>
        <!-- Add modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Add Book
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="ten" id="name" require class="bg-gray-50 border border-gray-300 text-gray-900
                                 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                            </div>
                            <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="gia" id="price" require class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required>
                            </div>
                            <div class=" col-span-2">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" name="hinhanh" class="hidden" require />
                                </label>
                            </div>
                            <div class=" col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="description" name="mota" rows="4" require class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description here"></textarea>                    
                            </div>
                        </div>
                        <button type="submit" name="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new product
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!--table-->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class=" py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Update</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array(($querry))) {?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="./Images/<?= $row['imgURL']?>" alt="ảnh lỗi">
                        </th>
                        <td class="px-6 py-4">
                            <?= $row['tensp'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row['mota'] ?>
                        </td>
                        <td class="px-6 py-4">
                            $<?= $row['gia'] ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= 
                            $row["masp"]?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="update.php?id=<?= $row["masp"]?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </section>

    <script>
        function xoasanpham(){
            var conf = confirm('Ban co muon xoa san pham?')
            return conf;
        }
    </script>


    <!--Tailwind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script> 
        document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById('defaultModalButton').click();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>