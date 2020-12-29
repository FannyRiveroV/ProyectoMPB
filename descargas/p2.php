<?php
    header("Content-disposition: attachment; filename=Costos.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/Costos.pptx");
?>