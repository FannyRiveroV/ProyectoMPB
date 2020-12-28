
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
    <div class="container col lg-10 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Clientes por curso</h2><br>
        <div class="container col-sm-10">
            <div class="container">
                        <form class="container col-sm-8 form-floating" action="admin.php?pagina=ccursos" method="POST">
                            <select class="container text-center" name="curso">
                                <br>
                            <?php
                                $sql="SELECT * FROM curso";
                                $cont=1;
                                $result_uni=mysqli_query($con,$sql);
                                while($mostrar=mysqli_fetch_array($result_uni))
                                {
                                echo "<option value=".$cont.">".$mostrar['nombre_curso']."</option>";
                                $cont++;
                                }
                            ?>
                            </select>
                            <br>
                            <input type="hidden" name="opcion" value="<?php echo $opcion?>"><br>
                            <input type="submit" name="boton" class="container btn btn-primary" value="Mostrar clientes incritos en este curso">
                        </form>
                        <span id="mensaje"> </span>
                        <?php
                        if(isset($_POST['curso'])){
                            $curso=$_POST['curso'];
                            $sql="SELECT * FROM interes WHERE id_curso='$curso' ";
                            $resultado=mysqli_query($con,$sql);
                            $row_cnt = $resultado->num_rows;
                            if($row_cnt>1){
                                    ?>
                                   <table class="container text-center table table-bordered">
                                        <thead class="container table-primary">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido P</th>
                                                <th>Apellido M</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Comuna</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while($mostrar=mysqli_fetch_array($resultado))
                                        {
                                                $cliente=$mostrar['id_cliente'];
                                                $sql="SELECT * FROM cliente WHERE idcliente='$cliente'";
                                                $res=mysqli_query($con,$sql);
                                                while($mostrar3=mysqli_fetch_array($res))
                                                {
                                                    ?>
                                                       <tr>
                                                        <td><?php echo $mostrar3['nombre']?></td>
                                                        <td><?php echo $mostrar3['apellido_paterno']?></td>
                                                        <td><?php echo $mostrar3['apellido_materno']?></td>
                                                        <td><?php echo $mostrar3['telefono']?></td>
                                                        <td><?php echo $mostrar3['correo']?></td>
                                                        <td><?php
                                                            $categ=$mostrar3['id_comuna'];
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
            
                            }
                            else {
                                ?>
                                <script>
                                    var element = document.getElementById("mensaje");
                                    element.style.color = '#d00' 
                                    element.className = "container card col-md-11 mb-5 text-center alert alert-danger"; 
                                    element.innerHTML ="<span class='alert-danger'> No existen clientes inscritos en este curso</span>";
                                </script>
                                <?php
                            }
                        }?>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

                        