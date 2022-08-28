<?php
include 'code.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="add_product.css">
</head>
<body>
    <span id="top"></span>
    <header id="header-bar" class="header-bar">
        <div class="logo">
            <a href="index.html">
                <img src="img/logo.png" alt="logo"/>
            </a> 
        </div>
        <nav>
            <div class="topnav">
                <a href="index.php" class="active">Home</a>
                <a href="add_product.php">Add Product</a>
                <a href="products.php">View Products</a>
            </div>
        </nav>
    </header>    
    <div class="container">
        <div class="container-header">
            <h1>Add Product</h1>
        </div>
        <div class="container-body">
            <form method="post" action="code.php" enctype="multi/form-data">
                <table class="first_table">
                    <tr>
                        <td><label for="">Name</label></td>
                        <td><input type="text" name="product_name" placeholder="Enter Product Name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="">Price</label></td>
                        <td><input type="text" name="price" placeholder="Enter Selling Price" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="">Upload Image</label></td>
                        <td><input type="file" name="image" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="">Description</label></td>
                        <td><textarea rows="3" cols="50" name="description" placeholder="Enter Description" class="form-control"></textarea></td>
                    </tr>
                </table>

                <table class="second_table">
                    <tr>
                        <td><input type="submit" id="add_btn" name="add_product_btn" value="Add Product"></td>
                        <td><input type="submit" id="view_btn" name="product_btn" value="View Products"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<footer>

</footer>
</html>
