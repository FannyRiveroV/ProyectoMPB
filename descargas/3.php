<?php
    header("Content-disposition: attachment; filename=Flujo-de-Caja-Ex.xls");
    header("Content-type: application/xls");
    readfile("archivos/fdce.xls");
?>