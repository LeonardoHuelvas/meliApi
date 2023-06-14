// Función para cargar los productos y categorías mediante una petición AJAX
function cargarProductosYCategorias() {
    // Realizar una petición AJAX para obtener los productos y categorías desde el servidor
    // y luego agregarlos a los contenedores correspondientes

    // Ejemplo:
    fetch("api/productos")
        .then(response => response.json())
        .then(data => {
            const productosContainer = document.getElementById("productos-container");
            const categoriasContainer = document.getElementById("categorias-container");

            // Limpiar los contenedores de productos y categorías
            productosContainer.innerHTML = "";
            categoriasContainer.innerHTML = "";

            // Agregar cada producto al contenedor de productos
            data.productos.forEach(producto => {
                const productoElement = document.createElement("div");
                productoElement.textContent = producto.nombre;
                productosContainer.appendChild(productoElement);
            });

            // Agregar cada categoría al contenedor de categorías
            data.categorias.forEach(categoria => {
                const categoriaElement = document.createElement("div");
                categoriaElement.textContent = categoria.descripcion;
                categoriasContainer.appendChild(categoriaElement);
            });
        })
        .catch(error => {
            console.error("Error al cargar los productos y categorías:", error);
        });
}

// Cargar los productos y categorías al cargar la página
cargarProductosYCategorias();

function agregarProducto() {
    // Aquí iría tu código para agregar el producto

    // Redirecciona al inicio después de agregar el producto
    window.location.href = "index.php";
}