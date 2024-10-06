<?php
class Database {
    private $host = "localhost";
    private $db_name = "test";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

class Food {
    private $conn;
    private $table_name = "food_master";

    public $id;
    public $foodnam;
    public $price;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new food item
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET foodnam=:foodnam, price=:price";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":foodnam", $this->foodnam);
        $stmt->bindParam(":price", $this->price);
        return $stmt->execute();
    }

    // Read all food items
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Delete a food item
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}

// Instantiate Database and Food
$database = new Database();
$db = $database->getConnection();
$food = new Food($db);

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $food->foodnam = $_POST['foodnam'];
        $food->price = $_POST['price'];
        if ($food->create()) {
            echo "Food item added successfully.";
        } else {
            echo "Unable to add food item.";
        }
    } elseif (isset($_POST['delete'])) {
        $food->id = $_POST['id'];
        if ($food->delete()) {
            echo "Food item deleted successfully.";
        } else {
            echo "Unable to delete food item.";
        }
    }
}

$foods = $food->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Management</title>
</head>
<body>
    <h1>Food Management</h1>

    <form method="post">
        <input type="text" name="foodnam" placeholder="Food Name" required>
        <input type="text" name="price" placeholder="Price" required>
        <button type="submit" name="create">Add Food Item</button>
    </form>

    <h2>Food List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $foods->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['foodnam']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>