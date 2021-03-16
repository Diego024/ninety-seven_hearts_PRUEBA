<!DOCTYPE html>
<html>
    <head>
        <title>Inicio de Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/Login.css">
    </head>
    <body>
        <img class="fondo" src="../../resources/statics/images/fondo.png" alt="">
        <div class="container">
        <!-- IMAGEN DE FONDO -->
            <div class="img">
                <img src="../../resources/statics/images/data1.svg" alt="">
            </div>
            <!-- AQUÍ VA EL LOGIN -->
            <div class="login-container">
                <form action="LogIn.php">
                    <img class="Avatar" src="../../resources/statics/images/user1.svg" alt="">
                    <h2>Bienvenido</h2>
                    <!-- INPUTS -->
                    <div class="input-div one">
                        <div>
                            <h5>Usuario</h5>
                            <input type="text" class="input">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div>
                            <h5>Contraseña</h5>
                            <input type="password" class="input">
                        </div>
                    </div>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
        <script type="text/javascript" src="../../app/features/public/dashboard/Login.js"></script>
    </body>
</html>