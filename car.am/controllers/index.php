<?php
require_once '../vendor/autoload.php';
require_once '../controllers/Car.php';

use Smarty\Smarty;

$smarty = new Smarty;

$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('../cache');
$smarty->setConfigDir('../configs');

$carObj = new Car();
$cars = $carObj->getCars();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $carObj->deleteCar($id);
    echo json_encode(['success' => true]);
    exit();
}

$smarty->assign('cars', $cars);

$smarty->display('index.tpl');
?>