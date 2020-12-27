<html>
<body>
    <!--Navbar-->
    <nav class="navbar bg-primary fixed-top">
    <!-- Additional container -->
    <div class="container text-center">
        <!-- Navbar brand -->
        <li class="text-primary">-- ---</li>
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="text-right nav-link text-white" href="index.php?pagina=inicio">Cerrar sesion</a>
        </li>
     </ul>
        <!-- Collapse button -->
    </div>
    <!-- Collapsible content -->
</nav>
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
?>
<br> <br> <br>
<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Clientes Registrados</h2><br>
        <table class="container text-center table table-bordered">
        <caption>Lista de usuarios</caption>
            <thead class="container table-primary">
                <tr>
                                    <th>idcliente</th>
                                    <th>Nombre</th>
                                    <th>Apellido P</th>
                                    <th>Apellido M</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>id Comuna</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="SELECT * FROM cliente";
                                    $result= mysqli_query($con,$sql);
                                    while($mostrar=mysqli_fetch_array($result))
                                    {       
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $mostrar['idcliente']?></td>
                                        <td><center><?php echo $mostrar['nombre']?></center></td>
                                        <td><center><?php echo $mostrar['apellido_paterno']?></center></td>
                                        <td><center><?php echo $mostrar['apellido_materno']?></center></td>
                                        <td><center><?php echo $mostrar['telefono']?></center></td>
                                        <td><center><?php echo $mostrar['correo']?></center></td>
                                        <td><center><?php
                                            $categ=$mostrar['id_comuna'];
                                            $cat="SELECT * FROM comuna WHERE idcomuna='$categ' ";
                                            $result_uni=mysqli_query($con,$cat);
                                            while($mostrar_uni=mysqli_fetch_array($result_uni))
                                            {
                                                echo $mostrar_uni['nombre_comuna'];
                                            }
                                        ?></center></td>
                                        <td>
                                            <form action="admin.php?pagina=clientes" method="POST">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name="Ecliente" value="<?php echo $mostrar['idcliente']?>">
                                            <input type="hidden" name="boton">
                                            <input type="submit" name="botonE" value="ELIMINAR"> 
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <?php                    