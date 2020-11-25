<?php
    header("Content-disposition: attachment; filename=Unidad_3_MPB.docx");
    header("Content-type: application/docx");
    readfile("archivos/Unidad_3_MPB.docx");
?>