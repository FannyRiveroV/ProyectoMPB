<?php
    header("Content-disposition: attachment; filename=Precio.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/Precio.pptx");
?>