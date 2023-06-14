<?php
$url = "https://api.mercadolibre.com/sites/MLA/search?q=chromecast&limit=50";
$json = file_get_contents($url);
$data = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Productos de MercadoLibre</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 10vw;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Productos de MercadoLibre</h1>
        <div class="row">
            <?php foreach ($data['results'] as $item): ?>
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
