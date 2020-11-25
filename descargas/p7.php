<?php
    header("Content-disposition: attachment; filename=p2MPB.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/p2MPB.pptx");
?>