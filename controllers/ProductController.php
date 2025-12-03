<?php


include "../services/validation.php";
include "../services/crud.php";





$productName =  $_POST['name'];
$productPrice =  $_POST['price'];
$productSalePrice =  $_POST['sale_price'];
$productDescription = $_POST['description'];

// image file  array that contains all image info
$productImageFile = $_FILES['image'];

//image name 
$imageName = $_FILES['image']['name'];

//image temp name  
$tempName = $_FILES['image']['tmp_name'];

//image extention    -> png   jpg
$imageExtention = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

// to create unique name for image
$newName = uniqid() . "." . $imageExtention;
// upload path
$uploadPath = __DIR__ . "/../public/assets/images/";
move_uploaded_file($tempName, $uploadPath . $newName);



$filePath = __DIR__ . '/../data/products.json';


$product = [
    'name' => $productName,
    'price' => $productPrice ,
    'sale' => $productSalePrice,
    'description' => $productDescription,
    'image'=> "assets/images/$newName"


];


create($filePath ,$product );

