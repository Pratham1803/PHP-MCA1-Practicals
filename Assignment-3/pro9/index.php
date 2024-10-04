<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAILS</title>
</head>

<body>
    <!-- create beautiful form design to enter product details like product id, name, quanity and price with button -->
    <form action="#" method="post" align="center">
        <label for="product_name">Product Name</label><br />
        <input type="text" name="product_name" id="product_name" placeholder="Enter Product Name Here" required>
        <br><br />

        <label for="quantity">Quantity</label><br />
        <input type="number" name="quantity" id="quantity" placeholder="Enter Product Quantity Here" required>
        <br><br />

        <label for="price">Price</label><br />
        <input type="number" name="price" id="price" placeholder="Enter Product Price Here" required>
        <br><br />

        <button type="submit" id="btnSubmit" name="btnSubmit" value="Submit" >Submit</button>
    </form>
</body>

<?php
require "DbHandler.php";
require "ProductModel.php";

$db = new DbHandler();
$db->getProduct();

if(isset($_POST['btnSubmit'])){
    $name = $_POST['product_name'];
    $quan = $_POST['quantity'];
    $price = $_POST['price'];

    $product = new ProductModel($name,$quan,$price);    
    $res = $db->addProduct($product);
    header(header: "location:#");
}

?>

</html>