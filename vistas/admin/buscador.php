
<?php
    include "conexion.php";
    if(isset($_POST['botonE'])){

        $Ecliente=$_POST['Ecliente'];
        $sql="DELETE FROM cliente WHERE idcliente='$Ecliente'";
        $con->query($sql);
        echo "<script>
            alert('Cliente eliminado con éxito!')
        </script>";

    }
?><br><br>
<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Buscador de clientes</h2><br>
            <h5 class="text-center">Seleccione el filtro para el cual desea buscar el cliente</h5>

                        <form class="container col-sm-8 form-floating" action="admin.php?pagina=buscador" method="POST">
                            <select class="container text-center" name="filtro">
                                <option value="correo">Correo</option>
                                <option value="telefono">Telefono</option>
                                <option value="nombre">Nombre</option>
                                <option value="apellido_paterno">Apellido Paterno</option>
                                <option value="apellido_materno">Apellido Materno</option>
                            </select> <br>
                            <input type="hidden" name="opcion" value="<?php echo $opcion?>"><br>
                            <input class="container btn btn-primary" type="submit" name="boton" value="Buscar Cliente">
                        </form>

                        
                        <?php
                            if(isset($_POST['filtro']))
                            {
                                $filtro=$_POST['filtro'];
                                if($filtro=="telefono"){
                                    header("location: admin.php?pagina=telefono" );
                                }
                                if($filtro=="correo"){
                                    header("location: admin.php?pagina=correo" );
                                }
                                if($filtro=="apellido_materno"){
                                    header("location: admin.php?pagina=apmaterno" );
                                }
                                if($filtro=="apellido_paterno"){
                                    header("location: admin.php?pagina=appaterno" );
                                }
                                if($filtro=="nombre"){
                                    header("location: admin.php?pagina=nombre" );
                                }
                                
                            }
                        ?>