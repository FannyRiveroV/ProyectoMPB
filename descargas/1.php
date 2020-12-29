<?php
    header("Content-disposition: attachment; filename=Costos-Por-Pasos.xlsx");
    header("Content-type: application/xlsx");
    readfile("archivos/cpp.xlsx");
?>