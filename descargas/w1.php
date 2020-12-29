<?php
    header("Content-disposition: attachment; filename=Flujo-de-Caja-Basico.doc");
    header("Content-type: application/doc");
    readfile("archivos/fdcbasico.doc");
?>