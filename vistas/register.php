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
<?php 
    include "conexion.php";
    if(isset($_POST['boton'])){
        $nombre = mysqli_real_escape_string($con,$_POST["nombre"]);
        $ap1 = mysqli_real_escape_string($con,$_POST["ap1"]);
        $ap2 = mysqli_real_escape_string($con,$_POST["ap2"]);
        $telefono=mysqli_real_escape_string($con,$_POST["telefono"]);
        $correo =mysqli_real_escape_string($con,$_POST["email"]);
        $password = mysqli_real_escape_string($con,$_POST["password"]);
        $passbrigida= sha1($password);
        $comuna = mysqli_real_escape_string($con,$_POST["comuna"]);
        $sqluser="SELECT correo FROM cliente
                        WHERE correo = '$correo'";

        $resultadouser=$con->query($sqluser);

        

        $filas= $resultadouser->num_rows;
        if($filas > 0){
            echo"<script>
                    alert('El usuario ya existe')
                    window.location = 'index.php?pagina=register';
                    </script> ";
        }else{
            $sqlusuario= "INSERT INTO cliente(nombre,
            apellido_paterno,
            apellido_materno,
            telefono,
            correo,
            password,
            id_comuna) VALUE ('$nombre','$ap1','$ap2','$telefono','$correo','$passbrigida','$comuna')";
            $resultadousuario = $con->query($sqlusuario);


            $sqlcl="SELECT * FROM cliente";
            $res=$con->query($sqlcl);
            while($mos=mysqli_fetch_array($res)){
                $idcliente=$mos['idcliente'];
            }

            $cont=1;
            while(isset($_POST['op_'.$cont]))
            {
                $cursos=$_POST['op_'.$cont];
                $sqlcursos="INSERT INTO interes(id_cliente,id_curso) VALUE (".$idcliente.",".$cursos.")";
                $con->query($sqlcursos);
                $cont++;
            }
            

            if($resultadousuario>0){
                echo"<script>
                    alert('Registro Existoso :D')
                    window.location = 'index.php';
                    </script> ";
            }else{
                echo"<script>
                    alert('Error al registrarse')
                    window.location = 'index.php?pagina=register';
                    </script> ";
            }
        }



    }

?>

<!DOCTYPE html>
<html>

    <head>
        
    </head>

    <body>
        <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./img/usuario.png" th:src="@{/img/user.png}"/>
                </div>
                <form action="index.php?pagina=register" method="POST"class="form-floating">
                    <div class="form-group" id="user-group"> 
                        <input type="text" required="required" class="form-control" style="text-transform:uppercase;" name="nombre" placeholder="Nombre" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" required="required" class="form-control" style="text-transform:uppercase;" name="ap1" placeholder="Apellido1" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" required="required" class="form-control" style="text-transform:uppercase;" name="ap2" placeholder="Apellido2" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="form-group" >
                        <select name="comuna" required="required" class="form-control text-center" >
                        <option>Seleccione comuna</option>
                        <?php
                            $sql="SELECT * FROM comuna";
                            $cont=1;
                            $result_uni=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result_uni))
                            {
                                echo "<option value=".$cont.">  " .$cont.$mostrar['nombre_comuna'] ."</option> <br>";
                                $cont++;
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group"  id="user-group">
                        <input type="text" required="required"  class="form-control" name="telefono" placeholder="Ingrese numero celular de 8 digitos" minlength="8" >
                    </div>
                    <div class="form-group"  id="user-group">
                        <input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="required" class="form-control" style="text-transform:uppercase;" name="email" placeholder="Correo electronico" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" required="required" minlength="8" class="form-control" name="password" placeholder="Ingrese clave">
                    </div>
                    
                    <p> Selecciona tus intereses </p>
                    <div>
                        <?php
                                $sql="SELECT * FROM curso";
                                $resu=mysqli_query($con,$sql);
                                $cont=1;
                                while($mostrar=mysqli_fetch_array($resu)){
                                    echo"             <input type='checkbox' name='op_".$cont."' value='".$cont."'>" .$mostrar['nombre_curso']."</input>";
                                }
                        ?>
                    </div><br>
                    <input type="submit" name="boton"  class="btn btn-danger" value="Registre el usuario">
                <br> <br>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="container card col-md-5 mb-5 text-center modal-content" id="mensaje">
                <h4 class="text-center">Accede a contenido exclusivo</h4>
                <p>Al registrarte podras descargar el material disponible, revisar lista 
                de lugares de capacitación y más</p>
            </div>
    </div>

    </body>

</html>