<?php
    header("Content-disposition: attachment; filename=p3MPB.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/p3MPB.pptx");
?>