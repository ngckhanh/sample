<?php
session_start();

$name = $price = $description = $target_file = "";
$nameErr = $priceErr = $descriptionErr = "";

if(isset($_POST['add_product_btn'])) {  
    // Validation
    function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if (empty($_POST["product_name"])) {
        $nameErr = "Product name must not be empty";
    }
    else{
        $name = test_input($_POST['product_name']);
        if (strlen($_POST["product_name"]) < 10) {
            $nameErr = "Product name must contain at least 10 characters";
        }
        elseif (strlen($_POST["product_name"]) > 20) {
            $nameErr = "Product name must contain at most 20 characters";
        }
    }
    
    if (empty($_POST["price"])) {
        $priceErr = "Price must not be empty";
    }
    else{
        $price = test_input($_POST["price"]);
        if ($price <= 0) {
            $priceErr = "Price must be a positive number";
        }
    }
    
    if (empty($_POST["description"])) {
        $descriptionErr = "Description must not be empty";
    }
    else{
        $description = test_input($_POST["description"]);
        if (strlen($_POST["description"]) > 50) {
            $descriptionErr = "Description must contain at most 50 characters";
        }
    }

    if (($nameErr == "") && ($descriptionErr == "") && ($priceErr == "")) {
        $product = [ 
            'name' => $name,
            'price'=> $price,
            'description' => $description,
            'created_time' => date('Y-m-d h:i:s'),
        ];
    
        $_SESSION['products'][] = $product; 

        $target_dir = "C:/Users/tranl/khanh/images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }
    } else {
        echo "Failed to add product. Try again";
        $_SESSION['products'][] = "";
    }

    if (isset($_SESSION['products'])) {
        echo '<pre>';
        print_r($_SESSION['products']);
        echo '</pre>';
    
}
?>
