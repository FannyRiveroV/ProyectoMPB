
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
        <h2 class="text-center">Clientes por curso</h2><br>
                        <form action="admin.php?pagina=ccursos" method="POST">
                            <select name="curso">
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
                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                            <input type="submit" name="boton" value="Mostrar clientes incritos en este curso">
                        </form>
                        <?php
                        if(isset($_POST['curso'])){
                            $curso=$_POST['curso'];
                            $sql="SELECT * FROM interes WHERE id_curso='$curso' ";
                            $resultado=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($resultado))
                            {
                                ?>
                                <table>
                                    <thead>
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
                                        $cliente=$mostrar['id_cliente'];
                                        $sql="SELECT * FROM cliente WHERE idcliente='$cliente'";
                                        $res=mysqli_query($con,$sql);
                                        while($mostrar3=mysqli_fetch_array($res))
                                        {
                                    ?>
                                        <tr>
                                            <td><center><?php echo $mostrar3['nombre']?></center></td>
                                            <td><center><?php echo $mostrar3['apellido_paterno']?></center></td>
                                            <td><center><?php echo $mostrar3['apellido_materno']?></center></td>
                                            <td><center><?php echo $mostrar3['telefono']?></center></td>
                                            <td><center><?php echo $mostrar3['correo']?></center></td>
                                            <td><center><?php
                                                $categ=$mostrar3['id_comuna'];
                                                $cat="SELECT * FROM comuna WHERE idcomuna='$categ' ";
                                                $result_uni=mysqli_query($con,$cat);
                                                while($mostrar_uni=mysqli_fetch_array($result_uni))
                                                {
                                                    echo $mostrar_uni['nombre_comuna'];
                                                }
                                        ?></center></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <?php
                                        }
                                        echo "<br>";
                            }
                        }
                        