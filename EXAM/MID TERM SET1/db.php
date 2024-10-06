<?php
class Db{
    private $conn = null;
    private $query = null;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=contact_db;";
        $user = "root";
        $password = "";
        $this->conn = new PDO($dsn, $user, $password);
    }

    public function addContact(Contact $contact) {
        $this->query = "insert into contact_master(name, mobile, email) values(:n, :m, :e)";
        $stmt = $this->conn->prepare($this->query);
        $stmt->bindValue(':n', $contact->getName());
        $stmt->bindValue(':m', $contact->getMobile());
        $stmt->bindValue(':e', $contact->getEmail());
        return $stmt->execute();
    }

    public function getAllContacts() {
        $this->query = "select * from contact_master";
        $stmt = $this->conn->query($this->query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContactById($id) {
        $this->query = "select * from contact_master where id = :id";
        $stmt = $this->conn->prepare($this->query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        require "contact.php";
        if ($data != null) {
            return new Contact($data['id'], $data['name'], $data['mobile'], $data['email']);
        } else {
            return null;
        }
    
    }

    public function deleteContactById($id) {
        $this->query = "delete from contact_master where id = :id";
        $stmt = $this->conn->prepare($this->query);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function updateContact($contact) {
        $this->query = "update contact_master set name = :n, mobile = :m, email = :e where id = :id";
        $stmt = $this->conn->prepare($this->query);
        $stmt->bindValue(':n', $contact->getName());
        $stmt->bindValue(':m', $contact->getMobile());
        $stmt->bindValue(':e', $contact->getEmail());
        $stmt->bindValue(':id', $contact->getId());
        return $stmt->execute();
    }
}
?>