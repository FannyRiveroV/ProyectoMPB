<div class="container row">
    <div class="container col lg-12 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Cursos disponibles</h2><br>
        <table class="container text-center table table-bordered" id="eliminado">
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
                                 include "conexion.php";
                                    $sql="SELECT * FROM curso";
                                    $result=mysqli_query($con,$sql);
                                    while($mostrar=mysqli_fetch_array($result))
                                    { 
                                ?>
                                    <tr>
                                        <td><?php echo $mostrar['idcurso']?></td>
                                        <td><?php echo $mostrar['nombre_curso']?></td>
                                        <td>
                                            <form action="admin.php?pagina=cursos" method="POST">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name="Ecurso" value="<?php echo $mostrar['idcurso']?>">
                                            <input type="hidden" name="boton">
                                            <input type="submit" name="botonCE" class="btn btn-primary" value="ELIMINAR"> 
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                            </tbody>
<?php
include "conexion.php";
    if(isset($_POST['botonCE'])){
        $Ecurso=$_POST['Ecurso'];
        $sql="DELETE FROM curso WHERE idcurso='$Ecurso'";
        $con->query($sql);
    ?>
                        <script>
                            var element = document.getElementById("eliminado");
                            element.style.color = '#d00' 
                            element.className = "container col lg-8 md-8 mb-5 alert alert-danger"; 
                            element.innerHTML ="<span class='alert-danger'> Curso eliminado con exito de la base de datos </span>";
                            window.setTimeout(function() { window.location = "admin.php?pagina=cursos" },1000);
                        </script>
                    <?php

}
?>