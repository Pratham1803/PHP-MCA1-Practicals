<?php
class DbHandler
{
    private $conn = null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
    }

    public function addProduct(ProductModel $product)
    {
        try {
            $qry = "insert into tblProduct values(:i,:n,:q,:p)";
            $stmt = $this->conn->prepare($qry);

            $stmt->bindParam(":i", $product->productId);
            $stmt->bindParam(":n", $product->productName);
            $stmt->bindParam(":q", $product->productQuantity);
            $stmt->bindParam(":p", $product->productPrice);

            $isFilled = $stmt->execute();
            if ($isFilled) {
                echo "Data Inserted";
            } else {
                echo "Something Went Wrong!! in Data Insertion";
            }
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
}
?>