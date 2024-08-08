<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="icon" href="leaf-outline.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="container">
        <nav>
            <center>
                <ul>
                    <li><a href="#" class="logo"><ion-icon name="leaf-outline"></ion-icon>EcoPlus</a></li>
                    <li><a href="index.php" class="btn">Inicio </a></li>
                    <li><a href="#seccion2" class="btn">Conocenos</a></li>
                    <li><a href="#seccion3" class="btn">productos</a></li>
                    <li><a href="#seccion4" class="btn">Ayuda</a> </li> 
                </ul>
            </center>
        </nav>
    </div>
    </header>
            <form action="iniciosesion.php" method="POST">
        <center><h1>INICIAR SESION</h1></center>
        <hr>
        <?php 
        if(isset($_GET['error'])){
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
            </p> 
        <?php
        }
        ?>

        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="clave" placeholder="Clave">
        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="crearcuenta.php">Crear Cuenta</a>
    </form>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>