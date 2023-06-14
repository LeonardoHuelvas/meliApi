<!DOCTYPE html>
<html>
<head>
    <!-- Enlaza tu CSS aquí -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- Formulario de creación de cuenta -->
    <form id="signUpForm" action="crear_cuenta.php" method="post">
        <div class="svgContainer">
            <!-- Puedes añadir tu SVG aquí -->
        </div>
        <div class="inputGroup">
            <label for="signupEmail">Email:</label>
            <input type="email" id="signupEmail" name="email" required>
        </div>
        <div class="inputGroup">
            <label for="signupPassword">Contraseña:</label>
            <input type="password" id="signupPassword" name="password" required>
        </div>
        <div class="inputGroup">
            <label for="signupNombre">Nombre:</label>
            <input type="text" id="signupNombre" name="nombre" required>
        </div>
        <div class="inputGroup">
            <label for="signupApellido">Apellido:</label>
            <input type="text" id="signupApellido" name="apellido" required>
        </div>
        <div class="inputGroup">
            <label for="signupSexo">Sexo:</label>
            <select id="signupSexo" name="sexo" required>
                <option value="">Selecciona</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="inputGroup">
            <label for="signupDireccion">Dirección:</label>
            <input type="text" id="signupDireccion" name="direccion" required>
        </div>
        <div class="inputGroup">
            <label for="signupFechaNacimiento">Fecha de nacimiento:</label>
            <input type="date" id="signupFechaNacimiento" name="fecha_nacimiento" required>
        </div>
        <div class="inputGroup">
            <label for="signupTelefono">Teléfono:</label>
            <input type="tel" id="signupTelefono" name="telefono" required>
        </div>
        <button type="submit">Crear cuenta</button>
    </form>

    <!-- Formulario de recuperación de contraseña -->
    <form id="recoverPasswordForm" action="recuperar_contrasena.php" method="post">
        <div class="svgContainer">
            <!-- Puedes añadir tu SVG aquí -->
            <div class="mySVG"></div>
        </div>
        <div class="inputGroup inputGroup1">
            <label for="recoverEmail">Email:</label>
            <input type="email" id="recoverEmail" name="email" required>
            <div class="helper helper1">Email</div>
        </div>
        <button type="submit">Recuperar contraseña</button>
    </form>
</body>
</html>
