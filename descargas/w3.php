<?php
    header("Content-disposition: attachment; filename=Unidad_2_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_2_MPB.docx");
?>