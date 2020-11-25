<?php
    header("Content-disposition: attachment; filename=Unidad_1_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_1_MPB.docx");
?>