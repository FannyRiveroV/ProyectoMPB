<?php
    header("Content-disposition: attachment; filename=Flujo-de-Caja-Blanco.xls");
    header("Content-type: application/xls");
    readfile("archivos/fdcb.xls");
?>