<head>
    <title>Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">Panel de administrador</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h5>Clientes</h5>
            </div>
            <li class="nav-item">
                <a href="admin.php?pagina=clientes"  class="nav-link"><span>Mostrar clientes</span> </a>
            </li>
            <li class="nav-item">
                <a href="admin.php?pagina=comunas" class="nav-link"><span>Clientes por comuna</span> </a>
            </li>
            <li class="nav-item">
                <a href="admin.php?pagina=ccursos" class="nav-link"><span>Clientes por curso</span> </a>
            </li>
            <li class="nav-item">
                <a href="admin.php?pagina=buscador" class="nav-link"><span>Buscador de clientes</span> </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                <h5>Cursos</h5>
            </div>
            <li class="nav-item">
                <a href="admin.php?pagina=cursos"  class="nav-link"><span>Mostrar cursos</span> </a>
            </li>
            <li class="nav-item">
                <a href="admin.php?pagina=acursos"  class="nav-link"><span>Añadir cursos</span> </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a href="index.php?pagina=inicio"  class="nav-link"><span>Cerrar Sesion</span> </a>
            </li>
        </ul>

        <br>


</body>

</html>
<?php 
	if(isset($_GET['pagina'])){
        if( $_GET['pagina'] == "clientes" || $_GET['pagina'] == "comunas"
        || $_GET['pagina'] == "ccursos" || $_GET['pagina'] == "buscador"
        || $_GET['pagina'] == "cursos" || $_GET['pagina'] == "acursos"
        || $_GET['pagina'] == "telefono" || $_GET['pagina'] == "correo"
        || $_GET['pagina'] == "apmaterno" || $_GET['pagina'] == "appaterno"
        || $_GET['pagina'] == "nombre"){
          include "vistas/admin/".$_GET['pagina'].".php";
        }
        else{
					include "vistas/admin/inicio.php";
				}
	}else{
        include "vistas/admin/inicio.php";
	}
 ?>

 </html>
 