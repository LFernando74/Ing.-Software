<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styleFront.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<style media="screen">
    .carrusel{
        width: 100%;
    }
    section{
      margin-top:30px;
      
  }
  h1{
      text-align:center;
  }
  h3{
      text-align:center;
  }
  p{
      text-align:center;
  }
  .wrapper{
      margin: auto;
      width: 700px;
      margin-top: 20px;
      padding: 10px;
    }
  </style>
  
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand mx-auto" href="index.php">SCHOOL SCHEDULE</a>
        </div>

        <div class="mx-auto order-0">
            <ul class="navbar-nav mr-auto">
                <li class= "nav-item active">
                    <a class="nav-link   " href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Recordatorios</a> 
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Materias</a>
                </li>
            </ul> 
        </div> 
     
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2"> 
         <ul class="navbar-nav ml-auto"> 
             <li class="nav-item"> 
                 <a class="nav-link" href="iniciarSesion.php">Iniciar Sesion</a> 
             </li> 
             <li class="nav-item"> 
                 <a class="nav-link" href="registroUsuario.php">Registro</a> 
             </li> 
         </ul> 
     </div> 
 </nav> 
<section class="carrusel-sec">
    <div class="carrusel"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" width="150px">
        <div class="carousel-item active">
            <img src="images/2.jpg"class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
<section class="product-list">
    <div class="body"><h1>SCHOOL SCHEDULE</h1>
    <h3>Sistema de gestión Escolar para Estudiantes del CUCEI</h3>
    <p>Lo sabemos, estás cansado de que la universidad dependa solo de usted. Sin embargo, tenemos la solución: School Schedule</p></div>
</section>
<?php require 'footer.php'; ?>
</body>
</html>