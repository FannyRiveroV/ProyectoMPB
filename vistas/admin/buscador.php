
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
<br>Seleccione el filtro para el cual desea buscar el cliente:

                        <form action="admin.php?pagina=buscador" method="POST">
                            <select name="filtro">
                                <option value="correo">Correo</option>
                                <option value="telefono">Telefono</option>
                                <option value="nombre">Nombre</option>
                                <option value="apellido_paterno">apellido P</option>
                                <option value="apellido_materno">apellido M</option>
                            </select>
                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                            <input type="submit" name="boton" value="Buscar Cliente">
                        </form>

                        
                        <?php
                            if(isset($_POST['filtro']))
                            {
                                $filtro=$_POST['filtro'];
                                if($filtro=="telefono"){
                                    ?>
                                        <form action="admin.php?pagina=buscador" method="POST">
                                            <input type="number" name="ftelefono">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name ="filtro" value="<?php echo $filtro?>"> 
                                            <input type="submit" name="boton" value="Buscar Cliente">
                                        </form>


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
                                        if(isset($_POST['ftelefono']))
                                        {
                                        $telefono =$_POST['ftelefono'];
                                        $sql="SELECT * FROM cliente WHERE telefono = '$telefono' ";
                                        $res=$con->query($sql);
                                        while($mos=mysqli_fetch_array($res))
                                        {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $mos['nombre']?></center></td>
                                                <td><center><?php echo $mos['apellido_paterno']?></center></td>
                                                <td><center><?php echo $mos['apellido_materno']?></center></td>
                                                <td><center><?php echo $mos['telefono']?></center></td>
                                                <td><center><?php echo $mos['correo']?></center></td>
                                                <td><center><?php echo $mos['id_comuna']?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                if($filtro=="correo"){
                                    ?>
                                        <form action="admin.php?pagina=buscador" method="POST">
                                            <input type="text" name="fcorreo" placeholder="Ingrese correo">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name ="filtro" value="<?php echo $filtro?>"> 
                                            <input type="submit" name="boton" value="Buscar Cliente">
                                        </form>


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
                                        if(isset($_POST['fcorreo']))
                                        {
                                        $correo =$_POST['fcorreo'];
                                        $sql="SELECT * FROM cliente WHERE correo = '$correo' ";
                                        $res=$con->query($sql);
                                        while($mos=mysqli_fetch_array($res))
                                        {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $mos['nombre']?></center></td>
                                                <td><center><?php echo $mos['apellido_paterno']?></center></td>
                                                <td><center><?php echo $mos['apellido_materno']?></center></td>
                                                <td><center><?php echo $mos['telefono']?></center></td>
                                                <td><center><?php echo $mos['correo']?></center></td>
                                                <td><center><?php echo $mos['id_comuna']?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                if($filtro=="apellido_materno"){
                                    ?>
                                        <form action="admin.php?pagina=buscador" method="POST">
                                            <input type="text" name="fapellido_materno" placeholder="Ingrese apellido_materno">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name ="filtro" value="<?php echo $filtro?>"> 
                                            <input type="submit" name="boton" value="Buscar Cliente">
                                        </form>


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
                                        if(isset($_POST['fapellido_materno']))
                                        {
                                        $apellido_materno =$_POST['fapellido_materno'];
                                        $sql="SELECT * FROM cliente WHERE apellido_materno = '$apellido_materno' ";
                                        $res=$con->query($sql);
                                        while($mos=mysqli_fetch_array($res))
                                        {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $mos['nombre']?></center></td>
                                                <td><center><?php echo $mos['apellido_paterno']?></center></td>
                                                <td><center><?php echo $mos['apellido_materno']?></center></td>
                                                <td><center><?php echo $mos['telefono']?></center></td>
                                                <td><center><?php echo $mos['correo']?></center></td>
                                                <td><center><?php echo $mos['id_comuna']?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                if($filtro=="apellido_paterno"){
                                    ?>
                                        <form action="admin.php?pagina=buscador" method="POST">
                                            <input type="text" name="fapellido_paterno" placeholder="Ingrese apellido_paterno">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name ="filtro" value="<?php echo $filtro?>"> 
                                            <input type="submit" name="boton" value="Buscar Cliente">
                                        </form>


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
                                        if(isset($_POST['fapellido_paterno']))
                                        {
                                        $apellido_paterno =$_POST['fapellido_paterno'];
                                        $sql="SELECT * FROM cliente WHERE apellido_paterno = '$apellido_paterno' ";
                                        $res=$con->query($sql);
                                        while($mos=mysqli_fetch_array($res))
                                        {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $mos['nombre']?></center></td>
                                                <td><center><?php echo $mos['apellido_paterno']?></center></td>
                                                <td><center><?php echo $mos['apellido_materno']?></center></td>
                                                <td><center><?php echo $mos['telefono']?></center></td>
                                                <td><center><?php echo $mos['correo']?></center></td>
                                                <td><center><?php echo $mos['id_comuna']?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                if($filtro=="nombre"){
                                    ?>
                                        <form action="admin.php?pagina=buscador" method="POST">
                                            <input type="text" name="fnombre" placeholder="Ingrese nombre">
                                            <input type="hidden" name="opcion" value="<?php echo $opcion?>">
                                            <input type="hidden" name ="filtro" value="<?php echo $filtro?>"> 
                                            <input type="submit" name="boton" value="Buscar Cliente">
                                        </form>


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
                                        if(isset($_POST['fnombre']))
                                        {
                                        $nombre =$_POST['fnombre'];
                                        $sql="SELECT * FROM cliente WHERE nombre = '$nombre' ";
                                        $res=$con->query($sql);
                                        while($mos=mysqli_fetch_array($res))
                                        {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $mos['nombre']?></center></td>
                                                <td><center><?php echo $mos['apellido_paterno']?></center></td>
                                                <td><center><?php echo $mos['apellido_materno']?></center></td>
                                                <td><center><?php echo $mos['telefono']?></center></td>
                                                <td><center><?php echo $mos['correo']?></center></td>
                                                <td><center><?php echo $mos['id_comuna']?></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                
                            }
                        ?>