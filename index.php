<?php

require_once 'config/db.php';
require_once 'models/ItemModel.php';
require_once 'controller/ItemController.php';
require_once 'models/CategoryModel.php';
 

$itemController = new ItemController($dbConnection);
 

 
 

 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>API</title>
        
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://unpkg.com/transition-style">
    </head>

    <body>
        <header class="logo-container">
        <!-- <img src="setts/challenge.jpg" alt="Logo de la empresa" class="logo"> -->
            <h1>API MELI</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="views/itemView.php">Productos</a></li>
                    <li><a href="controller/insert_product.php">agregar productos</a></li>
                    <li><a href="views/create_category.php">Crear Categoría</a></li>
                    <li><a href="contacto.php">Contacto</a></li </ul>
            </nav>
        </header>
        <main>
            <!-- Contenido principal de la página -->
            <h2>Bienvenido a nuestra aplicación</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisi vel pulvinar tincidunt, lectus quam luctus leo, sed ultricies risus urna id quam. Vestibulum pharetra mi eu nibh feugiat, at pulvinar ex fermentum. Integer mollis varius
                lorem, eu cursus nibh eleifend sed.</p>

            <!-- Agrega el contenedor de productos con un identificador único -->
            <div id="productos-container">
                <!-- Aquí se cargarán los productos dinámicamente -->
            </div>
        </main>
        <footer>
            <!-- Aquí puedes agregar tu pie de página común a todas las páginas -->
            <p>Derechos de autor &copy;
                <?php echo date("Y"); ?> Leonardo Huelvas. Todos los derechos reservados.</p>
        </footer>
        <!-- Agrega tus scripts JavaScript aquí -->
        <script src="js/scripts.js"></script>
    </body>

    </html>