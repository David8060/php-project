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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $imageUploadResult = handleImageUpload($_FILES["image"]);

        if ($imageUploadResult["status"] === "success") {
            $imagePath = $imageUploadResult["file_path"];

            $carAttributes->setMake($_POST["make"]);
            $carAttributes->setModel($_POST["model"]);
            $carAttributes->setYear($_POST["year"]);
            $carAttributes->setPrice($_POST["price"]);
            $carAttributes->setImage($imagePath);

            $carObj->addCar($carAttributes);

            header("Location: index.php");
            exit();
        } else {
            $smarty->assign('error', "Error uploading image: " . $imageUploadResult["message"]);
        }
    } else {
        $smarty->assign('error', "No file uploaded or an error occurred.");
    }
}

$smarty->display('create.tpl');
?> 