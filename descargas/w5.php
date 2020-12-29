<?php
    header("Content-disposition: attachment; filename=Unidad_4_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_4_MPB.docx");
?>