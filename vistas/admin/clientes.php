<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Clientes Registrados</h2><br>
        <table class="container text-center table table-bordered" id="eliminado" >
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
                                include "conexion.php";
                                    $sql="SELECT * FROM cliente";
                                    $result= mysqli_query($con,$sql);
                                    while($mostrar=mysqli_fetch_array($result))
                                    {       
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $mostrar['idcliente']?></td>
                                        <td><?php echo $mostrar['nombre']?></td>
                                        <td><?php echo $mostrar['apellido_paterno']?></td>
                                        <td><?php echo $mostrar['apellido_materno']?></td>
                                        <td><?php echo $mostrar['telefono']?></td>
                                        <td><?php echo $mostrar['correo']?></td>
                                        <td><?php
                                            $categ=$mostrar['id_comuna'];
                                            $cat="SELECT * FROM comuna WHERE idcomuna='$categ' ";
                                            $result_uni=mysqli_query($con,$cat);
                                            while($mostrar_uni=mysqli_fetch_array($result_uni))
                                            {
                                                echo $mostrar_uni['nombre_comuna'];
                                            }
                                        ?></td>
                                        <td>
                                            <form action="admin.php?pagina=clientes" method="POST">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name="Ecliente" value="<?php echo $mostrar['idcliente']?>">
                                            <input type="hidden" name="boton">
                                            <input type="submit" name="botonE"class="btn btn-primary" value="ELIMINAR"> 
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <?php                    
include "conexion.php";
if(isset($_POST['botonE'])){

    $Ecliente=$_POST['Ecliente'];
    $sql="DELETE FROM cliente WHERE idcliente='$Ecliente'";
    $con->query($sql);
    ?>
                        <script>
                            var element = document.getElementById("eliminado");
                            element.style.color = '#d00' 
                            element.className = "container col lg-8 md-8 mb-5 alert alert-danger"; 
                            element.innerHTML ="<span class='alert-danger'> Cliente eliminado con exito de la base de datos </span>";
                            window.setTimeout(function() { window.location = "admin.php?pagina=clientes" },3000);
                        </script>
                    <?php

}
?>