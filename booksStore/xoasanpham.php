<?php
    include 'ketnoiDataBase.php'; 
    $id = (int) $_GET['id'];
    $image = "SELECT imgURL FROM sanpham WHERE sanpham.masp = $id";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_array($query);
    //delete file img
    if(file_exists("./Images/".$after['imgURL'])){
        unlink("./Images/".$after['imgURL']);
    }
    $sql = "DELETE FROM sanpham WHERE sanpham.masp = $id";
    mysqli_query($conn, $sql);
    header("location:products.php");
?>