<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $data = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'estado' => $_POST['estado'],
        'categoria_id' => $_POST['categoria_id']
    ];
    
    // Validar los datos si es necesario
    
    // Insertar los datos en la base de datos
    require_once '../config/db.php';
    require_once '../models/ItemModel.php';
   
    $itemModel = new ItemModel($dbConnection);
    $itemModel->insertItem($data);
    if (empty($data['nombre'])) {
        // Manejar el caso cuando el campo 'nombre' está vacío
        // Puedes mostrar un mensaje de error al usuario o redireccionar a una página de error
        // Por ejemplo:
        header('Location: error.php');
        exit;
    }
    
    // // Redireccionar a la página de éxito o a donde desees
    // header('Location: success.php');
    // exit;
}
?>

<!DOCTYPE html>
<html>
<head>


<a href="../index.php" class="btn custom-btn-secondary" style="margin-top: 20px;"> Ir a Inicio</a>


    <title>Insertar Producto</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>

    
        /* Estilos para el formulario */
                * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        .form-container {
         max-width: 400px;
         margin: 0 auto;
         padding: 20px;
         color: black;
        -webkit-border-radius: 1px;
        
        text-decoration: none;
        border-radius: 23px;
        background: #0056b5;
        -webkit-box-shadow: 6px 6px 25px #706c6c, -6px -6px 25px #ffffff;
        box-shadow: 6px 6px 25px #706c6c, -6px -6px 25px #ffffff;
            
        }

        .form-container h2 {
            margin-top: 0;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #008CBA; 
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group-button  :hover{
            background-color: #00b0ff;
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
<body>
    
    <div class="form-container">
        <h2>Agregar Producto</h2>
        <form id="insert-product-form" action="" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría ID</label>
                <input type="text" id="categoria_id" name="categoria_id" required>
            </div>
            <div class="form-group form-group-button  ">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>
