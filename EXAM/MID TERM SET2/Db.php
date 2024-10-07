<?php
class Db
{
    private $con = null;
    private $query = null;

    public function __construct()
    {
        try {
        $dsn = "mysql:host=localhost;dbname= advertisements_db;";
        $uname = "root";
        $psw = "";
        $this->con = new PDO($dsn, $uname, $psw);
        } catch (PDOException $pd){
            echo $pd->getMessage();
        }
    }

    public function addAdvertisement($title, $content)
    {
        try {
            $this->query = "INSERT INTO advertisements(title, content) VALUES(:title, :content)";
            $stmt = $this->con->prepare($this->query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "<script>alert('Something Went Wrong!!\n " . $e->getMessage() . "')</script>";
        }
    }

    public function getAllAdvertisements(){
        try{
            $this->query = "SELECT * FROM advertisements";
            $stmt = $this->con->query($this->query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $pd){
            echo $pd->getMessage();
        }
    }

    public function getAdvertisement($id){
        try{
            $this->query = "SELECT * FROM advertisements WHERE id = :id";
            $stmt = $this->con->prepare($this->query);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            return $stmt->fetch();
        }catch (PDOException $pd){
            echo $pd->getMessage();
        }
    }

    public function deleteAdvertisement($id){
        try{
            $this->query = "DELETE FROM advertisements where id = :id";
            $stmt = $this->con->prepare($this->query);
            $stmt->bindParam(':id',$id);
            return $stmt->execute();
        }catch(PDOException $pd){ 
            echo $pd->getMessage();
        }
    }

    public function updateAdvertisment($id,$title, $content){
        try{
            $this->query = "UPDATE advertisements set title = :title, content = :content WHERE id = :id";
            $stmt = $this->con->prepare($this->query);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':content',$content);
            $stmt->bindParam(':id',$id);
            return $stmt->execute();
        }catch(PDOException $pd){
            echo $pd->getMessage();
        }
    }
}
?>