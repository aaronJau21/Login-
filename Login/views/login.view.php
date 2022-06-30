<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar sesión</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa-solid fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa-solid fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
                <i class="submit-btn fa-solid fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <?php if(!empty($errores)) :?>
                <div class="error">
                    <ul> <?php echo $errores ?> </ul>
                </div>
            <?php endif;?>  
        </form>
        <p class="texto-registrate">
            Aun no tienes cuenta?
            <a href="Registrate.php">Regístrate</a>
        </p>
    </div>

    <!-- script -->
    <script src="https://kit.fontawesome.com/6a52a2bfd6.js" crossorigin="anonymous"></script>
</body>
</html>