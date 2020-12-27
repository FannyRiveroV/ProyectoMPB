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
        <h2 class="text-center">Ingresar nuevos cursos</h2><br>
        <div class="container col-sm-8">
            <div class="container">
                <form class="container form-floating" action="admin.php?pagina=acursos" method="POST">
                            <input class="container" type="text" name="curso_nuevo" placeholder="Ingrese nombre de curso nuevo"> <br>
                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                            <div>
                                <br>
                                <input class="container btn btn-primary" type="submit" name="boton" value="Añadir Curso">
                            </div>
                </form>
                <?php
                        
                        if(isset($_POST['curso_nuevo']))
                        {
                            $curson=$_POST['curso_nuevo'];
                            $sql="INSERT INTO curso(nombre_curso) VALUE ('$curson')";
                            $con->query($sql);
                            echo $con->error;
                            
                        }