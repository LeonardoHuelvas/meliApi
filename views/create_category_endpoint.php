<?php
require_once '../config/db.php';
require_once '../models/CategoryModel.php';
require_once '../controller/CategoryController.php';

$categoryController = new CategoryController($dbConnection);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'descripcion' => $_POST['descripcion'],
        'path' => $_POST['path']
    ];

    $categoryController->createCategory($data);

    // Puedes redireccionar a una página de éxito o mostrar un mensaje
    // Aquí redireccionaremos a index.php
    header('Location: ./create_category.php');
    exit();
}
?>
