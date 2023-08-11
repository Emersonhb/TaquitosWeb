<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


    <link rel="stylesheet" href="assetslog/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <table class="tabla">
                            <tr>
                                <td> <button id="btn__iniciar-sesion">Iniciar Sesión</button></td>
                            </tr>
                        </table>
                    
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <table class="tabla">
                            <tr>
                                <td><button id="btn__registrarse">Regístrarse</button></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <table class="tabla">
                            <tr>
                                <td><button>Entrar</button></td>
                            </tr>
                        </table>
                        
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario.php" method="post" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        
                        <table class="tabla">
                            <tr>
                                <td><button>Regístrarse</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </main>

        <script src="assetslog/js/script.js"></script>
</body>
</html>