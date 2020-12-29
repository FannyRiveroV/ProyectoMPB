<?php
    header("Content-disposition: attachment; filename=Unidad_5_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_5_MPB.docx");
?>