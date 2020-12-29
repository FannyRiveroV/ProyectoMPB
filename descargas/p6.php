<?php
    header("Content-disposition: attachment; filename=p1MPB.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/p1MPB.pptx");
?>