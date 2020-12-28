<br><br>
<div class="container row">
    <div class="container col lg-10 md-12 mb-5">
        <br><br>
        <h2 class="text-center">Búsqueda por correo </h2><br>
        <div class="container col-sm-10">
            <div class="container">                              
                <form action="admin.php?pagina=correo" class="container col-sm-8 form-floating" method="POST">
                                            <input class="container text-center" type="text" name="fcorreo" placeholder="Ingrese correo"> 
                                            <br>
                                            <input type="submit" name="boton" class="btn btn-primary" value="Buscar Cliente"><br>
                 </form>
                 <span id="mensaje"></span>
                                        <?php
                                        if(isset($_POST['fcorreo']))
                                        {
                                            
                                            include "conexion.php";
                                            $correo =$_POST['fcorreo'];
                                            $sql="SELECT * FROM cliente WHERE correo = '$correo' ";
                                            $res=$con->query($sql);
                                            $row_cnt = $res->num_rows;
                                            if($row_cnt>0)
                                            {?>
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
                                                while($mos=mysqli_fetch_array($res))
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $mos['nombre']?></td>
                                                        <td><?php echo $mos['apellido_paterno']?></td>
                                                        <td><?php echo $mos['apellido_materno']?></td>
                                                        <td><?php echo $mos['telefono']?></td>
                                                        <td><?php echo $mos['correo']?></td>
                                                        <td><?php echo $mos['id_comuna']?></td>
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
                                                    element.innerHTML ="<span class='alert-danger'> No se encuentra este correo en la base de datos</span>";
                                                </script>
                                                <?php
                                            }
                                        }
                                        
                                    