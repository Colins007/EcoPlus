<?php
session_start();

include('conexion.php');
if(isset($_POST['usuario']) && isset($_POST['clave'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $usuario = validate($_POST['usuario']);
    $clave = validate($_POST['clave']);

    if(empty($usuario)){
        header("Location: sesion.php?error=El Usuario es Requerido");
        exit();
    }elseif(empty($clave)){
        header("Location: sesion.php?error=La clave es requerida");
        exit();
    }else{
       //$clave = md5($clave);
        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = '$clave'";
        $result = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['usuario'] === $usuario && $row['clave'] === $clave){
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['Nombre_usuario'] = $row['Nombre_usuario'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: listo.php");
                exit();
            }else{
                header("Location: sesion.php?error=El usuario o la clave son incorrectos");
                exit();
            }
        }else{
            header("Location: sesion.php?error=El usuario o la clave son incorrectos");
            exit();
        }
    }
    }else{
        header("Location: listo.php");
        exit();

}