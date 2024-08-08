<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoPLus</title>
    <link rel="icon" href="leaf-outline.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
  margin: 0;
  padding: 0;
}
body {
    background-color: #000000;
    font-family: "proxima-nova", sans-serif;
    margin: auto;
    margin-right: 100px;
  }
  header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-around;
    transition: 0.7s;
    padding: 30px 20px;
    z-index: 10;
  }
  nav{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  header ul{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  header ul li{
    list-style: none;
  }
  header ul li a{
    letter-spacing: 2px;
    transition: 0.7s;
  }
header.abajo{
  background: #000000;
  padding: 10px 15px;
}
header div nav ul li .logo{
  position: relative;
  color: #fff;
  font-weight: bold;
  font-size: 2em;
  letter-spacing: 2px;
  transition: 1.5s;
  text-decoration: none;
  font-family: "Playfair Display", serif;
}
.btn{
    padding: 15px 100px;
    margin:10px 4px;
    color: #ffffff;
    text-transform: uppercase;
    text-align: center;
    position: relative;
    text-decoration: none;
    display:inline-block;
    font-family: "proxima-nova", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 15px;
  }
.btn{
    border:1px solid transparent; 
     -webkit-transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
    transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
  }
.btn::before {
    content: '';
    position: absolute;
    left: 0px;
    bottom:0px;
    z-index:-1;
    width: 0%;
    height:1px;
    background: #60ff85;
    box-shadow: inset 0px 0px 0px #60ff85;
    display: block;
    -webkit-transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
    transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
  }
.btn:hover::before {
    width:100%;
  }
  
  .btn::after {
    content: '';
    position: absolute;
    right: 0px;
    top:0px;
    z-index:-1;
    width: 0%;
    height:1px;
    background: #60ff85;
    -webkit-transition: all 0.4s cubic-bezier(.5, .24, 0, 1);
    transition: all 0.4s cubic-bezier(.5, .24, 0, 1)
  }
  .btn:hover::after {
    width:100%;
  }
  .btn:hover{
    border-left:1px solid #60ff85;
    border-right:1px solid #60ff85;
    color: #60ff85;
  }
section{
  height:115vh;
  width: 107%;
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.zona1 {
background-image: url("img1.jpeg")
}
.seccion2 {
background-image: url("img2.jpeg");
display: flex;
flex-wrap: wrap;
}
.contenedor {
background-image: url("img3.jpeg");
}
.seccion4 {
background-image: url("img4.jpeg");
}
form{
  padding: 50px 55px;
  border-radius: 20px;
  text-align: center;
  width: 340px;
  background: rgba(0, 0, 0, 0.722);
  border: 1px solid white;
}
.caja{
  flex-direction: colum;
  text-align: left;
}
h2{
  color: #ffffff;
  font-size: 35px;
  font-family: "Playfair Display", serif;
}
label{
  color: #ffffff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 15px;
}
.name, .phone, .email, .mensaje, textarea{
  padding: 17px 25px;
  border-radius: 25px;
  margin-bottom: 20px;
  background-color: #ffffff;
  border: 2px solid #ffffff;
  color: #000000;
  outline: none;
}
.boton{
    padding: 15px 100px;
    margin:10px 4px;
    color: #fff;
    font-family: sans-serif;
    text-transform: uppercase;
    text-align: center;
    position: relative;
    text-decoration: none;
    display:inline-block;
}
.boton{
  font-family: "proxima-nova", sans-serif;
  font-weight: 500;
  font-size: 13px;
  text-transform: uppercase!important;
  letter-spacing: 2px;
  color: #fff;
  cursor: hand;
  text-align: center;
  text-transform: capitalize;
  border: 1px solid #fff;
  border-radius:50px;
  position: relative;
  overflow: hidden!important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  background: transparent!important;
  z-index:10;
}
.boton:hover{
  border: 1px solid #2ac24d;
  color: #2ac24d!important;
  transition: 1s;
}
footer{
  position: relative;
  width: 100%;
  background: #000000b7;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
footer .redes_sociales,
footer .social{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}
footer .redes_sociales li,
footer .social li{
  list-style: none;
}
footer .redes_sociales li a{
  font-size: 2em;
  color: #fff;
  margin: 10px 25px;
  display: inline-block;
  transform: 0.5s;
}
footer .redes_sociales li a:hover{
  transform: translateY(-10px);
}
footer .social li a{
  font-size: 2em;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  text-decoration: none;
  opacity: 0.75;
  font-family: "Playfair Display", serif;
}
footer .social li a:hover{
  opacity: 2;
} 
@keyframes animateWave {
  0%{
    background-position-x: 1000px;
  }
  100%{
    background-position-x: 0px;
  }
}
@keyframes animateWave_2 {
  0%{
    background-position-x: 0px;
  }
  100%{
    background-position-x: 1000px;
  }
}
/*SECCION 1*/
.inicio{
  text-align: center;
  margin: 200px;
}
.inicio h1{
  font-size: 80px;
  line-height: 100px;
  color: #fff;
  font-family: "Playfair Display", serif;
  margin-bottom: 35px;
}
.inicio p{
  font-size: 20px;
  color: #fff;
  padding: 0 250px;
  margin-bottom: 35px;
}
/*seccion 2*/
.card{
  position: relative;
  width: 200px;
  height: 200px;
  padding: 150px;
  align-items: center;
  margin: 40px;
}
.card .face{
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 10px;
  overflow: hidden;
  transition: .5s;
}
.card .front{
  transform: perspective(600px) rotateY(0deg);
  box-shadow: 0 5px 10px #000;
}
.card .front img{
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.card .front h3{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 45px;
  line-height: 45px;
  color: #fff;
  background: #000;
  text-align: center;
}
.card .back{
  transform: perspective(600px) rotateY(180deg);
  background: #000000c3;
  padding: 15px;
  color: #f3f3f3;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-align: center;
  box-shadow: 0 5px 10px #000;
}
.card .back .link{
  border-top: solid 1px #f3f3f3;
  height: 50px;
  line-height: 50px;
  text-decoration: none;
}
.card .back .link a{
  color: #f3f3f3;
}
.card .back h3{
  font-size: 30px;
  margin-top: 20px;
  letter-spacing: 2px;
}
.card .back p{
  letter-spacing: 1px;
}
.card:hover .front{
  transform: perspective(600px) rotateY(180deg);
}
.card:hover .back{
  transform: perspective(600px) rotateY(360deg);
}

/*SECCION 3*/
.contenedor{
  padding: 0;
  margin: auto;
  display: flex;
  justify-content: space-between;
  contain: paint;
}
/* SECCION CONTENEDOR DE ITEMS */
.contenedor .contenedor-items{
  margin-top: 30px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  grid-gap:30px;
  grid-row-gap: 30px;
  /* width: 60%; */
  width: 100%;
  transition: .3s;
}
.contenedor .contenedor-items .item{
  max-width: 200px;
  margin: auto;
  border: 1px solid #666;
  border-radius: 10px;
  padding: 30px;
  transition: .3s;
  background: rgba(0, 0, 0, 0.722);
  color: white;
}
.contenedor .contenedor-items .item .img-item{
  width: 100%;
  border-radius: 5px;
}
.contenedor .contenedor-items .item:hover{
  box-shadow: 0 0 10px #00000000;
  scale: 1.05;
}
.contenedor .contenedor-items .item .titulo-item{
  display: block;
  font-weight: bold;
  text-align: center;
  font-family: "Playfair Display", serif;
  padding: 10px;
}
.contenedor .contenedor-items .item .precio-item{
  display: block;
  text-align: center;
  font-weight: bold;
  font-size: 22px;
}

.contenedor .contenedor-items .item .boton-item{
font-family: "proxima-nova", sans-serif;
font-weight: 500;
font-size: 13px;
text-transform: uppercase!important;
letter-spacing: 2px;
color: #fff;
cursor: hand;
text-align: center;
text-transform: capitalize;
border: 1px solid #fff;
border-radius:50px;
position: relative;
overflow: hidden!important;
-webkit-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-o-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
background: transparent!important;
z-index:10;
}
.contenedor .contenedor-items .item .boton-item{
  display: block;
  margin: 10px auto;
  border: none;
  background-color: #fff;
  color: #fff;
  padding: 5px 15px;
  border-radius: 5px;
  cursor: pointer;
  border: 1px solid #fff;
}
.contenedor .contenedor-items .item .boton-item:hover{
  border: 1px solid #60ff85;
  color: #60ff85!important;
  transition: 1s;
}
/* seccion carrito */
.carrito{
  border: 1px solid #666;
  width: 35%;
  margin-top: 30px;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: auto;
  position: sticky !important;
  top: 0;
  transition: .3s;
  /* Estilos para ocultar */
  margin-right: -100%;
  opacity: 0;
}
.carrito .header-carrito{
  background-color: #000;
  color: #fff;
  text-align: center;
  padding: 30px 0;
}
.carrito .carrito-item{
  display: flex;
  align-items: center;
  /* justify-content: space-between; */
  position: relative;
  border-bottom: 1px solid #000000;
  padding: 20px;
  color: #000000;
  border: 1px solid white;
  background: white;
}
.carrito .carrito-item img{
  margin-right: 20px;
  border-radius: 5px;
}
.carrito .carrito-item .carrito-item-titulo{
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.carrito .carrito-item .selector-cantidad{
  display: inline-block;
  margin-right: 25px;
}
.carrito .carrito-item .carrito-item-cantidad{
  border: none;
  font-size: 18px;
  background-color: transparent;
  display: inline-block;
  width:30px;
  padding: 5px;
  text-align: center;
}
.carrito .carrito-item .selector-cantidad i{
  font-size: 18px;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  border-radius: 50%;
  border: 1px solid #ffffff;
  cursor: pointer;
}
.carrito .carrito-item .carrito-item-precio{
  font-weight: bold;
  display: inline-block;
  font-size: 18px;
  margin-bottom: 5px;
}
.carrito .carrito-item .btn-eliminar{
  position: absolute;
  right: 15px;
  top: 15px;
  color: #000000;
  font-size: 20px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 50%;
  border: 1px solid #000000;
  cursor: pointer;
  display: block;
  background: transparent;
  z-index: 20;
}
.carrito .carrito-item .btn-eliminar i{
  pointer-events: none;
}

.carrito-total{
  background-color: #f3f3f3;
  padding: 30px;
}
.carrito-total .fila{
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 10px;
}
.carrito-total .btn-pagar{
  display: block;
  width: 100%;
  border: none;
  background: #000000;
  color: #fff;
  border-radius: 5px;
  font-size: 18px;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  transition: .3s;
}
.carrito-total .btn-pagar:hover{
  scale: 1.05;
}

/* SECCION RESPONSIVE */
@media screen and (max-width: 850px) {
  .contenedor {
    display: block;
  }
  .contenedor-items{
      width: 100% !important;
  }
  .carrito{
      width: 100%;
  }
}


</style>
<script src="formulario.js"></script>
<body>
    <header>
    <div class="container">
        <nav>
            <center>
                <ul>
                    <li><a href="#" class="logo"><ion-icon name="leaf-outline"></ion-icon>EcoPlus</a></li>
                    <li><a href="#zona1" class="btn">Inicio </a></li>
                    <li><a href="#seccion2" class="btn">Conocenos</a></li>
                    <li><a href="#seccion3" class="btn">productos</a></li>
                    <li><a href="#seccion4" class="btn">Ayuda</a> </li> 
                </ul>
            </center>
        </nav>
    </div>
    </header>
    <section class="zona1" id="zona1">
        <br>
        <div class="inicio">
            <h1><ion-icon name="leaf-outline"></ion-icon>E c o P l u s</h1>
            <p>
               Robot Reciclaje de Residuos <br>
                EcoPlus, es una empresa con un sistema innovador automatizado con un producto <br> 
                que se inventara para reducir, reutilizar y reciclar 
                residuos de manera eficiente y sostenible. <br>
                 Claves esenciales hoy en día para proteger el medio ambiente.
            </p>

        </div>
    </section>
    
    <section class="seccion2" id="seccion2">
    <div class="card">
            <div class="face front">
                <img src="img6.jpg">
                <h3>Una Parte de Nosotros</h3>
            </div>
            <div class="face back">
                <h3>Una Parte de Nosotros</h3>
                <p>
                    Tenemos un conjunto único de valores que guían nuestra toma de decisiones 
                    en todos los niveles de la organización. Estos valores apoyan nuestra visión 
                    y misión de la empresa, creando un liderazgo específico en nuestro sector y 
                    a la vez comprometido con nuestra estrategia de crecimiento basada en nuestro pilar central: TU.

                </p>
                    <div class="link">
                        <a href="#">Detalles</a>
                    </div>
            </div>
        </div> 
        <div class="card">
            <div class="face front">
                <img src="img7.jpg">
                <h3>Tecnologia e Innovacion</h3>
            </div>
            <div class="face back">
                <h3>Tecnologia e Innovacion</h3>
                <p>Seguimos innovando para crear valor para la sociedad y 
                    promover el progreso mundial. Nuestras soluciones autónomas
                     integradas con IA potencian el trabajo inteligente e impulsan 
                     la transformación digital de las industrias y, en última 
                     instancia, ayudan a construir una sociedad inteligente. 
                     En nuestra forma de buscar la mejora constante y la innovación 
                     revolucionaria, exploramos la capacidad ilimitada de la tecnología y 
                     desbloqueamos infinitas posibilidades para los negocios y la sociedad. 
                     Estos esfuerzos están en línea con nuestro autoposicionamiento como “ Innovador ”, “ Inteligente ” e “ Infinito ”.</p>
                    <div class="link">
                        <a href="#">Detalles</a>
                    </div>
            </div>
        </div> 
        
    </section>
    
        <section class="contenedor" id="seccion3">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <div class="item">
                    <span class="titulo-item">Artur</span>
                    <img src="robot.jpg" alt="" class="img-item">
                    <span class="precio-item">$3.000</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">Mini Eco</span>
                    <img src="robot2.jpg" alt="" class="img-item">
                    <span class="precio-item">$1.900</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">WALL-E</span>
                    <img src="robot3.jpg" alt="" class="img-item">
                    <span class="precio-item">$5.590</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
                <div class="item">
                    <span class="titulo-item">EcoBot</span>
                    <img src="robot4.jpg" alt="" class="img-item">
                    <span class="precio-item">$9.990</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>
            </div>
            <!-- Carrito de Compras -->
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>
    
                <div class="carrito-items">
                    <!-- 
                    <div class="carrito-item">
                        <img src="img/boxengasse.png" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo">Box Engasse</span>
                            <div class="selector-cantidad">
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="1" class="carrito-item-cantidad" disabled>
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                            </div>
                            <span class="carrito-item-precio">$15.000,00</span>
                        </div>
                       <span class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                       </span>
                    </div>
                    <div class="carrito-item">
                        <img src="img/skinglam.png" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo">Skin Glam</span>
                            <div class="selector-cantidad">
                                <i class="fa-solid fa-minus restar-cantidad"></i>
                                <input type="text" value="3" class="carrito-item-cantidad" disabled>
                                <i class="fa-solid fa-plus sumar-cantidad"></i>
                            </div>
                            <span class="carrito-item-precio">$18.000,00</span>
                        </div>
                       <button class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                       </button>
                    </div>
                     -->
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.000,00
                        </span>
                    </div>
                    <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
                </div>
            </div>
        </section>
    
    <section class="seccion4" id="seccion4">
        <br>
        <center>
            <br><br><br><br>
                <form name="formulario1" onsubmit="return verificar()">
                    <h2>Sugerencias</h2>
                    <div class="caja">
                        <center>
                        <label for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Nombre" class="name" id="name" required>
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Mensaje" class="mensaje" id="mensaje"></textarea>
                        <input type="submit" value="Enviar" class="boton" id="enviar" onclick="name">
                        </center>
                    </div>
                </form><br><br><br><br>
        </center>
        <footer>
            <ul class="redes_sociales">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="link-outline"></ion-icon></a></li>
            </ul>
            <ul class="social">
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Autores</a></li>
                <li><a href="#">Equipo 3</a></li>
                <li><a href="#">ODS 15</a></li>
            </ul>
        </footer>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
