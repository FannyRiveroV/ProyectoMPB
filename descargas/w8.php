<?php
    header("Content-disposition: attachment; filename=Unidad_7_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_7_MPB.docx");
?>