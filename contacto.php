<?php
    if(isset($_POST["boton"]))
    {
        $nombre=$_POST['nombre'];
        $asunto=$_POST['asunto'];
        $email=$_POST['email'];
        $mensaje='-Se han contactado contigo diciendo lo siguiente: 
        
        Nombre: '.$nombre.' 
        Asunto: '.$asunto.'
        E-mail: '.$email.'
        Mensaje: 
        
        
        '.$_POST['comentarios'];

        ini_set( 'display_errors', 1 );

        if( mail("emaildestinatario@xd.cl",$asunto,$mensaje) )
            echo"<script>
                window.alert('Mensaje enviado correctamente, nos contactaremos a la brevedad');
            </script>";    
    };
?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> MPB</title>
        <!--CSS Bootsprat-->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!--RRSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }
        .fa:hover {
            opacity: 0.5;
        }
        .fa-youtube {
            color: red;
        }
        .bg-orange{
                background: #FE7C10; 
            }
        .bg-orange2{
                background: #F0B27A ; 
        }

        </style>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange fixed-top">
    <!-- Additional container -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">M.P.B</a>
        <!-- Collapse button -->
        <button 
            class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#basicExampleNav"
            aria-controls="basicExampleNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
        <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Emprendedores</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="matdescarg.php">Material descargable</a>
            <a class="dropdown-item" href="#">Lugares de capacitación</a>
            <a class="dropdown-item" href="#">Emprendedores destacados</a>
          </div>
        </li>

      </ul>
      <!-- Links -->

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </div>
  <!-- Additional container -->

</nav>
<!--/.Navbar-->

</header>
<!--Main Navigation-->
<br><br><br><br>
<br><br>
<div class="row">
<br><br>
      <div class="container col-md-4 mb-3">
        <div class="card">
          <h5 class="card-header info-color text-white text-center py-4 bg-orange">
          Contactanos</h5>
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
            <form class="text-center" style="color: #757575;" action="contacto.php" method="POST">

              <!-- Name -->
              <div class="md-form mt-3">
                  <input type="text" id="materialContactFormName" class="form-control">
                  <label for="materialContactFormName">Nombre</label>
              </div>
              <div class="md-form mt-3">
                  <input type="text" id="materialContactFormName" class="form-control">
                  <label for="materialContactFormName">Asunto </label>
              </div>
              <!-- E-mail -->
              <div class="md-form">
                  <input type="email" id="materialContactFormEmail" class="form-control">
                  <label for="materialContactFormEmail">E-mail</label>
              </div>


              <!--Message-->
              <div class="md-form">
                  <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                  <label for="materialContactFormMessage">Mensaje</label>
              </div>
              <!-- Send button -->
              <button class="btn  btn-rounded btn-block z-depth-0 my-4 waves-effect bg-orange2" type="submit"> Enviar </button>

            </form>
          </div>
        </div>
      <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">OFICINA</h5>
            <p class="card-text"> Las Brisas 4264
                        Maipú, Región Metropolitana<br>

                        CONTACTO<br>
                        232349893
                        informaciones@mpbconsultorias.cl<br>

                        HORARIO<br>
                        Lunes a Viernes: 8 am – 5 pm
                        Sábado: 10 am – 2 pm<</p>
        </div>
      </div>
    </div>
  </div>
<br><br>
<!-- Footer -->
<footer class="page-footer font-small pt-4 mt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 mt-md-0 mt-6">

      <!-- Content -->
      <h5 class="text-uppercase  text-center">Recuerda</h5>
      <p class=" text-center">Emprender es crecer y en MPB te brindaremos las herramientas para lograrlo.</p>

    </div>
<!-- Copyright -->
<div class=" container text-center py-3">
<a href="https://www.youtube.com/channel/UC2SeU2ExfSirdVk-rSIG7Jw" class="fa fa-youtube"> </a>
  <a href="https://www.facebook.com/mpbconsultorias/" class="fa fa-facebook"> </a>
</div>
</footer>
<!-- Footer -->
<!--Jquery-->
<script src="./js/jquery-3.5.1.min.js"></script>
        <!--Popper.js-->
        <script src=".js/popper.min.js"></script>
        <!--Bootstrap JS-->
        <script src="./js/bootstrap.min.js"></script>
        
    </body>

</html>