<?php
    include "conexion.php";
    if(isset($_POST['botonCE'])){
        $Ecurso=$_POST['Ecurso'];
        $sql="DELETE FROM curso WHERE idcurso='$Ecurso'";
        $con->query($sql);
        echo "<script>
            alert('Curso eliminado con éxito!')
        </script>";
    }
?>
<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Cursos disponibles</h2><br>
        <table class="container text-center table table-bordered">
        <caption>Lista de cursos</caption>
            <thead class="container table-primary">
                                <tr>
                                    <th>id Curso</th>
                                    <th>Nombre Curso</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="SELECT * FROM curso";
                                    $result=mysqli_query($con,$sql);
                                    while($mostrar=mysqli_fetch_array($result))
                                    { 
                                ?>
                                    <tr>
                                        <td><center><?php echo $mostrar['idcurso']?></center></td>
                                        <td><center><?php echo $mostrar['nombre_curso']?></center></td>
                                        <td>
                                            <form action="admin.php?pagina=cursos" method="POST">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name="Ecurso" value="<?php echo $mostrar['idcurso']?>">
                                            <input type="hidden" name="boton">
                                            <input type="submit" name="botonCE" value="ELIMINAR"> 
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                            </tbody>