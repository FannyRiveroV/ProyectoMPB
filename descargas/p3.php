<?php
    header("Content-disposition: attachment; filename=Liderazgo.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/Liderazgo.pptx");
?>