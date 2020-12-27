<!DOCTYPE html>
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
            
        .bg-cuadro{
               background: #FFA07A; 
         }
        </style>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange fixed-top">
    <!-- Additional container -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="https://www.mpbconsultorias.cl/">M.P.B</a>
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
                    <a class="nav-link" href="emprendedor.php?pagina=emp">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="emprendedor.php?pagina=nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="emprendedor.php?pagina=contacto">Contacto</a>
                </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Emprendedores</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a href="emprendedor.php?pagina=matdescarg" class="dropdown-item">Material descargable</a>
            <a class="dropdown-item" href="emprendedor.php?pagina=mataud">Material audiovisual</a>
            <a class="dropdown-item" href="emprendedor.php?pagina=matdescarg">Emprendedores destacados</a>
          </div> 
        </li>
      </ul>
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="text-right nav-link" href="index.php?pagina=inicio">Cerrar sesion</a>
        </li>
     </ul>
    </div>
    <!-- Collapsible content -->

  </div>
  <!-- Additional container -->
</nav>
<?php 
			if(isset($_GET['pagina'])){
        if( $_GET['pagina'] == "matdescarg" || $_GET['pagina'] == "nosotros"
        ||$_GET['pagina'] == "contacto"|| $_GET['pagina'] == "emp"
        || $_GET['pagina'] == "mataud" || $_GET['pagina'] == "rrss" || $_GET['pagina'] == "prvalor"
        || $_GET['pagina'] == "publicidad" || $_GET['pagina'] == "formaliza" || $_GET['pagina'] == "finanzas"
        || $_GET['pagina'] == "trabajo"){
          include "vistas/emprendedor/".$_GET['pagina'].".php";
        }
        else{
					include "vistas/emprendedor/emp.php";
				}
			}else{
				include "vistas/emprendedor/emp.php";
			}
		 ?>

 </html>
 