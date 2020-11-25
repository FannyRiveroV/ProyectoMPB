
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
        .img_eq{
          height:300px;
        }
        .sp{
          font-size: 13;
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
<div class="row">

  <!--Grid row-->
  <div class="row">
    <div class="container col-md-10 mb-5">

      <h2 class="text-center">Quienes Somos</h2>
      <hr>
      <p>
      Nuestro equipo interdisciplinario, posee formación académica en Estudios de Género y Cultura, 
      así como también experiencia y compromiso en acercar éste enfoque a diversas comunidades: Mujeres Jefas de Hogar, Migrantes,
       Hombres y Mujeres de la tercera edad, Jóvenes, discapacitados, entre otros, quienes progresivamente se 
       han empoderado y mejoran su calidad de vida a través del fortalecimiento de sus empresas, mejorando su 
       plan de financiamiento y su impacto hacia los consumidores.</p>
    </div>
  </div><br>
  <div class="row text-center">
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/blenda.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title text-center">Blenda Contreras</h5>
          <!--Text-->
          <p class="card-text sp text-center">965778204<br> 
          blendacontreras@gmail.com </p>
        </div>
      </div>
      <!--/.Card-->
    </div>
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/paola.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Paola Salazar</h5>
          <!--Text-->
          <p class="card-text sp">974032413<br>
         psalazarpino@gmail.com</p>
        </div>
      </div>
      <!--/.Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/michael.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Michael Vivanco</h5>
          <!--Text-->
          <p class="card-text sp">933849232<br>
          yoemprendoa2018@gmail.com</p>
        </div>
      </div>
    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/katherine.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Katherine Flores</h5>
          <!--Text-->
          <p class="card-text sp">935404723<br>
          kfloresvivar@gmail.com</p>
        </div>
      </div>
      <!--/.Card-->
    </div>
  </div>
  <!--Grid row-->
  <div class="row text-center">
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/jorge.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Jorge Vigores</h5>
          <!--Text-->
          <p class="card-text sp">933222654<br> 
         jorgevigores@gmail.com </p>
        </div>
      </div>
      <!--/.Card-->
    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/marco.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Marco Contreras</h5>
          <!--Text-->
          <p class="card-text sp"> 987752449<br>
          mcontrerasabarca@gmail.com</p>
        </div>
      </div>
      <!--/.Card-->
    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/patricia.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Patricia Cabrera</h5>
          <!--Text-->
          <p class="card-text sp">965781527<br>
          patacabrera@gmail.com</p>
        </div>
      </div>
    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/daniel.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Daniel Benavides</h5>
          <!--Text-->
          <p class="card-text sp">964222428<br>
          dbgt1979@gmail.com</p>
        </div>
      </div>
      <!--/.Card-->
    </div>
      <!--Grid column-->
  </div>
  <!--Grid row-->
  <div class="row text-center">
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/viviana.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Viviana Ramos</h5>
          <!--Text-->
          <p class="card-text sp"> 933726251<br> 
          viviramosvi@gmail.com  </p>
        </div>
      </div>
    </div>
      <!--/.Card-->
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/david.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">David Gonzalez</h5>
          <!--Text-->
          <p class="card-text sp">945980447<br>
          gonzalezdavidgonzalez@gmail.com</p>
        </div>

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">

      
      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="./img/carla.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Carla Orozco</h5>
          <!--Text-->
          <p class="card-text sp">976502027<br>
          orozcocastrocarla@gmail.com</p>
        </div>
      </div>
    </div>
    <!--Grid column-->
    <div class="col-lg-3 col-md-4 mb-2">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="./img/evelyn.jpeg" class="card-img-top img_eq"
            alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h5 class="card-title">Evelyn Cancino</h5>
          <!--Text-->
          <p class="card-text sp">997428371<br>
          evelyncancinob@hotmail.com</p>
        </div>
      </div>
      <!--/.Card-->
    </div>
  </div>
<!--Grid column-->
    <div class="row text-center">
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-2">
          <!--Card-->
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
              <img src="./img/angelica.jpeg" class="card-img-top img_eq"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h5 class="card-title">Angélica Escobar</h5>
              <!--Text-->
              <p class="card-text sp">995020240<br> 
             angescastrelli@yahoo.com.ar </p>
            </div>
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-2">
          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="./img/anita.jpeg" class="card-img-top img_eq"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h5 class="card-title">Anita Ortiz</h5>
              <!--Text-->
              <p class="card-text sp"> 972104094<br>
               afernanda.ortiz.o@gmail.com</p>
            </div>
          </div>
    <!--/.Card-->
    </div>
</div>
    <!--Grid column-->

</div>
</div>
</div>
<!--Main container-->

</main>
<!--Main layout-->

<!-- Footer -->
<footer class="page-footer font-sp pt-4 mt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 mt-md-0 mt-6">
      <hr>
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