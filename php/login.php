<?php
    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios where
    correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;
        header("location: ../main.html");
        exit;
    }else{
        echo '
        <script>
            alert("El usuario no es correcto, verifique los datos);
            window.location = "../index.php";
        </script>
        ';
        exit;
    }
?>