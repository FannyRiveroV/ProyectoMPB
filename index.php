
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
                    <a class="nav-link" href="historia.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos.php">Contacto</a>
                </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Emprendedores</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Material descargable</a>
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

<!--Main layout-->
<main class="mt-5">
<br><br><br><br>
<!--Main container-->
<div class="container">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-7 mb-4">

      <div class="view overlay z-depth-1-half">
        <img src="./img/nosotros.png" class="card-img-top" alt="">
        <div class="mask rgba-white-light"></div>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-5 mb-4">

      <h2>Sobre Nosotros</h2>
      <hr>
      <p>Nuestra consultora cuenta con 11 años de experiencia en el área de fomento productivo, 
      ejecutamos Programas de FOSIS dirigidos a emprendedores y emprendedoras de la región metropolitana</p>
      <a href="quienes-somos.php" class="btn bg-orange text-white">Conoce a nuestro equipo</a>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->   <br><br>
  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/emp.png" class="card-img-top"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h4 class="card-title">Material gratuito</h4>
          <!--Text-->
          <p class="card-text">En este sitio encontraras 
          material creado y recomendado por nuestra consultora, especialmente para tu emprendimiento. </p>
          <a href="#!" class="btn bg-orange text-white">Revisar recursos </a>
        </div>

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/emp2.png" class="card-img-top"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h4 class="card-title">Lugares de capacitación</h4>
          <!--Text-->
          <p class="card-text">Sabemos que emprender es dificil por eso preparamos una lista con lugares
          donde podras capacitarte.</p>
          <a href="#" class="btn bg-orange text-white">Ver lugares</a>
        </div>

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/emp3.png" class="card-img-top"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h4 class="card-title">Emprendedores destacados</h4>
          <!--Text-->
          <p class="card-text">Verdaderos ejemplos de superación impulsados por nuestra consultora, hoy queremos
          compartir sus historias.</p>
          <a href="#" class="btn bg-orange text-white">Mostrar historias</a>
        </div>

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!--Main container-->

</main>
<!--Main layout-->

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