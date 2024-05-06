<?php
    require 'ketnoiDataBase.php';
    $masp =(int) $_GET['id'];
        $sql = "SELECT * FROM sanpham WHERE masp = '$masp'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
        $img = $row['imgURL'];

if(isset($_POST["submit"]) ){
    $gia = $_POST['gia'];
    $tensp = $_POST['ten'];
    $mota = $_POST['mota'];
    $hinhanh = $_FILES['hinhanh']['name'];
    //tạo thư mục => note, tạo thư muc images ở bên ngoài trước nhé
    $target_dir = "./Images/";
    if($hinhanh){
        if(file_exists("./Images/".$img)){
            unlink("./Images/".$img);
        }
        $target_file = $target_dir.$hinhanh;
    }else{
        $target_file = $target_dir.$img;
        $hinhanh = $img;
    }
    //check đủ các trường thông tin
    if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path.'Images/'.basename($_FILES["hinhanh"]["name"]);
        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_path);

        $sql = "UPDATE sanpham SET tensp = '$tensp', gia = '$gia',
        mota = '$mota', imgURL = '$hinhanh'
        WHERE sanpham.masp = $masp;";
        
        mysqli_query($conn,$sql);
        //echo "<script>alert('bạn đã thêm thành công')</script>";
        header("Location:products.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <!--css-->
    <style>
    <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="ten" id="name" require class="bg-gray-50 border border-gray-300 text-gray-900
                            text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?= $row["tensp"]?>" required>
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="gia" id="price" require class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?= $row["gia"]?>"  required>
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
                    
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="mota" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"><?= $row["mota"]?></textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Update product
                    </button>
                    <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <a href="http://localhost:8080/BookStore/products.php">Back</a>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!--Tailwind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>












