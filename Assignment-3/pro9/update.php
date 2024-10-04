<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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

        <button type="submit" id="btnSubmit" name="btnSubmit" >Update</button>
        <button type="button" id="btnCancel" name="btnCancel" onclick="back()" >Back</button>

    </form>
    <script type="text/javascript">
        function back() {
            window.location.href = "index.php";
        }  // Function to go back to previous page after clicking cancel button.  // You can replace "index.php" with the actual page name.  // If you don't want to go back, you can remove this function.  // Note: This function is written in JavaScript and not PHP.  // If you want to use this function in PHP, you need to convert it to PHP.  // You can find a JavaScript function to go back to previous page in many places, like stack overflow, w3schools, etc.  // You can also use 'history.back()' function in JavaScript.  // Make sure to replace the 'index.php' with your actual page name.  // If you don't want to go back, you can remove this function.  // Note: This function is written in JavaScript and not PHP.  // If you want to use this
    </script>
</body>
<?php
    require "DbHandler.php";
    $db = new DbHandler();
    $product = $db->searchProducts(intval( $_GET['id']));
    
    echo "<script> document.getElementById('product_name').value = '". $product->getProductName() ."';</script>";
    echo "<script> document.getElementById('quantity').value = '". $product->getProductQuan()."';</script>";
    echo "<script> document.getElementById('price').value = '". $product->getProductPrice()."';</script>";

    if(isset($_POST['btnSubmit'])){
        $name = $_POST['product_name'];
        $quan = $_POST['quantity'];
        $price = $_POST['price'];
        
        $product = new ProductModel($name,$quan,$price);
        $res = $db->updateProduct(intval($_GET['id']),$product);
        header(header: "location:index.php");
    }
?>
</html>