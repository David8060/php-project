<?php
require_once '../models/CarAttributes.php';

class Car {
    private $host = "mysql_db";
    private $dbname = "cars_schema";
    private $username = "root";
    private $password = "zxcft741012";
    private $port = "3306"; 
    private $dsn;
    private $conn;

    public function __construct() {
        $this->dsn = "mysql:host={$this->host};dbname={$this->dbname};port={$this->port}";
        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getCars() {
        $cars = [];
        $sql = "SELECT * FROM car_items";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $cars;
    }

    public function addCar(CarAttributes $attributes) {
        $sql = "INSERT INTO car_items (make, model, year, price, image) VALUES (:make, :model, :year, :price, :image)";
        try {
            $stmt = $this->conn->prepare($sql);
            $make = $attributes->getMake();
            $model = $attributes->getModel();
            $year = $attributes->getYear();
            $price = $attributes->getPrice();
            $image = $attributes->getImage();
            $stmt->bindParam(':make', $make);
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':year', $year);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $image);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteCar($id) {
        $sql = "DELETE FROM car_items WHERE id = :id";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function updateCar($id, CarAttributes $attributes) {
        $sql = "UPDATE car_items SET make = :make, model = :model, year = :year, price = :price, image = :image WHERE id = :id";
        try {
            $stmt = $this->conn->prepare($sql);
            $make = $attributes->getMake();
            $model = $attributes->getModel();
            $year = $attributes->getYear();
            $price = $attributes->getPrice();
            $image = $attributes->getImage();
            $stmt->bindParam(':make', $make);
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':year', $year, PDO::PARAM_INT);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getCarById($id) {
        $sql = "SELECT * FROM car_items WHERE id = :id";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
?>
