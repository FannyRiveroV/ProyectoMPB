<?php
    header("Content-disposition: attachment; filename=Como-Vender.pptx");
    header("Content-type: application/pptx");
    readfile("archivos/Como-Vender.pptx");
?>