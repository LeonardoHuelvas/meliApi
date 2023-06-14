<?php
require_once '../config/db.php';
require_once '../models/ItemModel.php';

$itemModel = new ItemModel($dbConnection);
$data = $itemModel->getItemsFromAPI();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos de MercadoLibre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 10vw;
            object-fit: cover;
        }

        .custom-btn-secondary {
        margin-right: 15px 0.4s;
 
        display: inline-block;
        text-decoration: none;
        width: 7%;
         background-color: #008CBA; 
  border-bottom: solid;
  border: none;
  padding: 12px;
  border-radius: 5px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
  transition-duration: 0.4s;

    
}

.custom-btn-secondary:hover {
    background-color: #00b0ff;
}
    </style>
</head>
<a href="../index.php" class="btn custom-btn-secondary" style="margin-top: 20px;"> Ir a Inicio</a>
<body>
    <div class="container">
        <h1 class="my-4">Productos de MercadoLibre</h1>
        <div class="row">
            <?php foreach ($data as $item): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $item['thumbnail']; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['title']; ?></h5>
                        <p class="card-text">Precio: <?php echo $item['price']; ?></p>
                        <a href="<?php echo $item['permalink']; ?>" class="btn btn-primary" target="_blank">Ver producto</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
