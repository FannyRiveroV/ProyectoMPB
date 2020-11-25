<?php
    header("Content-disposition: attachment; filename=Costos-MPB.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/Costos-MPB.pptx");
?>