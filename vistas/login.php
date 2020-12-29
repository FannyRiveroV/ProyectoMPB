<head>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="./css/index.css" th:href="@{/css/index.css}">

</head>
<!DOCTYPE html>
<html>

     <body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./img/usuario.png" th:src="@{/img/user.png}"/>
                </div>
                <form action="index.php?pagina=login" method="POST" class="form-floating">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" placeholder="Ingrese correo" name="correo"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" required="required" placeholder="INGRESE CLAVE" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a class="text-danger" href="index.php?pagina=register"> Registrate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="container card col-md-5 mb-5 text-center modal-content" id="mensaje">
                <h4 class="text-center">Accede a contenido exclusivo</h4>
                <p>Al iniciar sesión podras descargar el material disponible, revisar lista 
                de lugares de capacitación y más</p>
            </div>
    </div>
    
    </body>

</html>
<?php
    include "conexion.php";
    if( !empty($_POST)){
        $corre = mysqli_real_escape_string($con,$_POST['correo']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $pass_brigida= sha1($password);
        $sql = "SELECT idcliente FROM cliente 
                WHERE correo = '$corre' AND password ='$pass_brigida' ";

        $resultado = $con->query($sql);
        $rows = $resultado->num_rows;
        if($rows>0)
        {
            $row = $resultado->fetch_assoc();
            $_SESSION['id_user']=$row["idcliente"];
            if($_POST['correo']=="ADMIN@MPB.CL")
                print "<script>window.setTimeout(function() { window.location = 'index.php?pagina=admin' }, 0000);</script>";
            else 
            print "<script>window.setTimeout(function() { window.location = 'index.php?pagina=emprendedor' },0000);</script>";
        }
        else{
            ?>
            <script>
                var element = document.getElementById("mensaje");
                element.style.color = '#d00' 
                element.className = "container card col-md-5 mb-5 text-center alert alert-secondary"; 
                element.innerHTML ="<span class='alert-secondary'> Usuario y/o contraseña incorrectos, por favor verifique los datos </span>";
            </script>
        <?php
        }
    }
?>