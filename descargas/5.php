<?php
    header("Content-disposition: attachment; filename=Puntos-de-Equilibrio.xls");
    header("Content-type: application/xls");
    readfile("archivos/pde.xls");
?>