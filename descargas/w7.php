<?php
    header("Content-disposition: attachment; filename=Unidad_6_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_6_MPB.docx");
?>