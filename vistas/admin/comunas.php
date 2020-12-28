
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
    <div class="container col lg-10 md-10 mb-5">
        <br><br>
        <h2 class="text-center">Clientes por comuna</h2><br>
        <div class="container col-sm-10">
            <div class="container">
                <form class="container col-sm-8 form-floating" action="admin.php?pagina=comunas" method="POST">
                    <select class="container text-center" name="comuna">
                    <br><br>
                    <option> Seleccione comuna </option>
                    <?php
                        $sql="SELECT * FROM comuna";
                        $cont=1;
                        $result_uni=mysqli_query($con,$sql);
                        while($mostrar=mysqli_fetch_array($result_uni))
                        {
                        echo "<option value=".$cont.">".$mostrar['nombre_comuna']."</option>";
                        $cont++;
                        }
                    ?>
                    </select><br>
                    <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                    <br>
                    <input class="container btn btn-primary" type="submit" name="boton" value="Mostrar Clientes">
                </form>
                <?php
                            if(isset($_POST['comuna'])){

                                $comuna=$_POST['comuna'];
                                $sql="SELECT * FROM comuna WHERE idcomuna='$comuna' ";
                                $result_uni=mysqli_query($con,$sql);
                                while($mostrar=mysqli_fetch_array($result_uni))
                                {
                                    $comuna=$mostrar['nombre_comuna'];
                                }
                                echo "<h3 class='text-center'>Clientes inscritos en: ".$comuna."<h3>";
                            }
                            ?>
                 <span id="mensaje"> </span>
            </div>
        </div>
    <div>
</div>
<?php
if(isset($_POST['comuna']))
{
?>
<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
                    <?php   
                    $comuna=$_POST['comuna'];
                    $sql="SELECT * FROM cliente WHERE id_comuna='$comuna'";
                    $result= mysqli_query($con,$sql);
                    $row_cnt = $result->num_rows;
                    if($row_cnt>0){
                        ?>
                        <table class="container text-center table table-bordered">
                            <thead class="container table-primary">
                                <tr>
                                    <th>idcliente</th>
                                    <th>Nombre</th>
                                    <th>Apellido P</th>
                                    <th>Apellido M</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>id Comuna</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
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
                            </tr>
                            <?php
                        }
                    }
                    else {
                        ?>
                        <script>
                            var element = document.getElementById("mensaje");
                            element.style.color = '#d00' 
                            element.className = "container card col-md-11 mb-5 text-center alert alert-danger"; 
                            element.innerHTML ="<span class='alert-danger'> No existen clientes en esta comuna</span>";
                        </script>
                    <?php
                    }
                }
 ?>
