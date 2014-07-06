<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $ricetta = $_POST['ricetta'];


    $content  = "$ricetta".PHP_EOL;

    header('Content-Description: File Transfer');
    header("Content-Type: application/force-download");
    header('Content-disposition: attachment; filename="Ricetta.txt"');
    header('Content-Length: '.strlen($content));
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Pragma: public');
    echo $content;
    exit;
}
?>