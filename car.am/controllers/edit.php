<?php
require_once '../vendor/autoload.php';
require_once '../controllers/Car.php';
require_once '../helpers/handleImage.php'; 
require_once '../models/CarAttributes.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('../cache');
$smarty->setConfigDir('../configs');

$carObj = new Car();
$carAttributes = new CarAttributes();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $car = $carObj->getCarById($id);

    if ($car) {
        $carAttributes->setMake($car['make']);
        $carAttributes->setModel($car['model']);
        $carAttributes->setYear($car['year']);
        $carAttributes->setPrice($car['price']);
        $carAttributes->setImage($car['image']);

        $smarty->assign('id', $car['id']);
        $smarty->assign('make', $carAttributes->getMake());
        $smarty->assign('model', $carAttributes->getModel());
        $smarty->assign('year', $carAttributes->getYear());
        $smarty->assign('price', $carAttributes->getPrice());
        $smarty->display('edit.tpl');
    } else {
        echo "Car not found.";
        exit();
    }
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['edit'];
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $price = $_POST["price"];

    $imagePath = '';

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $imageUploadResult = handleImageUpload($_FILES["image"]);

        if ($imageUploadResult["status"] === "success") {
            $imagePath = $imageUploadResult["file_path"];
        } else {
            echo "Error uploading image: " . $imageUploadResult["message"];
            exit();
        }
    }

    $carAttributes->setMake($make);
    $carAttributes->setModel($model);
    $carAttributes->setYear($year);
    $carAttributes->setPrice($price);
    $carAttributes->setImage($imagePath);
    
    $carObj->updateCar($id, $carAttributes);
    header("Location: index.php");

    exit();
}
?>