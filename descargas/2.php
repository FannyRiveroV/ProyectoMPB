<?php
    header("Content-disposition: attachment; filename=Depresiacion-Activos-Fijos.xls");
    header("Content-type: application/xls");
    readfile("archivos/daf.xls");
?>