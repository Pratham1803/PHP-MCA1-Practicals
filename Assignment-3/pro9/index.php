<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- create beautiful form design to enter product details like product id, name, quanity and price with button -->
    <form action="#" method="post" align="center">
        <label for="product_id" >Product ID</label><br />
        <input type="text" name="product_id" id="product_id" placeholder="Enter Product Id Here" required>
        <br><br />

        <label for="product_name">Product Name</label><br />
        <input type="text" name="product_name" id="product_name" placeholder="Enter Product Name Here" required>
        <br><br />

        <label for="quantity">Quantity</label><br />
        <input type="number" name="quantity" id="quantity" placeholder="Enter Product Quantity Here" required>
        <br><br />

        <label for="price">Price</label><br />
        <input type="number" name="price" id="price" placeholder="Enter Product Price Here" required>
        <br><br />

        <button type="submit" id="btnSubmit" name="btnSubmit">Submit</button>
    </form>
</body>

<?php
    if(isset($_POST["btnSubmit"])){
        require "DbHandler.php";
        require "ProductModel.php";
        $id = $_POST['product_id'];
        $name = $_POST['product_name']; 
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $product = new ProductModel($id,$name,$quantity,$price);

        $db = new DbHandler();
        $db->addProduct($product);
    }else{
        echo "Something Went Wrong!!";
    }
?>

</html>