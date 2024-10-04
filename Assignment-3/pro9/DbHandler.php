<?php
class DbHandler
{
    private $con;
    private $query;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=test";
        $uname = "root";
        $psw = "";

        $this->con = new PDO($dsn, $uname, $psw);
    }

    // Insert New Product in database
    public function addProduct(ProductModel $product)
    {
        try {
            $this->query = "insert into tblProduct(name,quan,price) values(:a,:b,:c)";
            $stmt = $this->con->prepare($this->query);
            
            $stmt->bindValue(':a', $product->getProductName());
            $stmt->bindValue(':b', $product->getProductQuan());
            $stmt->bindValue(':c', $product->getProductPrice());

            $res = $stmt->execute();
            return $res;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function getProduct(){
        $this->query = "select * from tblProduct";
        $stmt = $this->con->query($this->query);
        
        echo "<br/><center> <h3> Product List </h3>";
        echo "<table border=1, width=50%>";
        echo "<tr> <th>Name</th> <th>Price</th> <th>Quantity</th></tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>".$row['name'] . "</td>";
            echo "<td>".$row['price'] . "</td>";
            echo "<td>".$row['quan'] . "</td>";
            echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
            echo "<td><a href='update.php?id=".$row['id']."'>Update</a></td>";
            echo "</tr>";
        }
        echo "</table></center>";
    }

    public function searchProducts($id): ProductModel {
        $this->query = "SELECT * FROM tblProduct WHERE id = :id";
        $stmt = $this->con->prepare($this->query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        require "ProductModel.php";
        return new ProductModel($row['name'], $row['quan'], $row['price']);
    }

    public function deleteProduct($id){
        $this->query = "delete from tblProduct where id = :id";
        $stmt = $this->con->prepare($this->query);
        $stmt->bindParam(':id',$id);
        $res = $stmt->execute();
    }

    public function updateProduct($id,ProductModel $product){
        $this->query = "UPDATE tblProduct SET name = :name, quan = :quan, price = :price WHERE id = :id";
        $stmt = $this->con->prepare($this->query);
        
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':name', $product->getProductName());
        $stmt->bindValue(':quan', $product->getProductQuan());
        $stmt->bindValue(':price', $product->getProductPrice());
        $res = $stmt->execute();
        return $res;
    }
}
?>