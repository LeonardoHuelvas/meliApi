<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    
    <style>
        .category {
            text-align: center;
            padding-top: 10px;
            font-style: inherit;
            font-size: 36px;
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
    <h1 class="category">Crear Categoría</h1>
    <form action="create_category_endpoint.php" method="post" id="createCategoryForm">
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="path">Ruta</label>
            <input type="text" id="path" name="path" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Categoría</button>
    </form>

    <script>
        document.getElementById("createCategoryForm").addEventListener("submit", function(event) {
            event.preventDefault();

            mostrarCarga();
        });

        function mostrarCarga() {
            var boton = document.querySelector('button[type="submit"]');
            boton.disabled = true;

            var cargaAlerta = document.createElement("div");
            cargaAlerta.className = "alert alert-info";
            cargaAlerta.textContent = "Cargando...";

            boton.parentNode.insertBefore(cargaAlerta, boton);

            setTimeout(function() {
                cargaAlerta.remove();

                var exitoAlerta = document.createElement("div");
                exitoAlerta.className = "alert alert-success";
                exitoAlerta.textContent = "Categoría creada con éxito.";

                boton.parentNode.insertBefore(exitoAlerta, boton.nextSibling);

                boton.disabled = false;

                limpiarFormulario();
            }, 2000);
        }

        function limpiarFormulario() {
            document.getElementById("descripcion").value = "";
            document.getElementById("path").value = "";
        }
    </script>
</body>
</html>
