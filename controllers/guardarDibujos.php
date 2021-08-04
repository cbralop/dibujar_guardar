<?php
    $img = $_POST['base64'];
    $nombre = $_POST['nombre'];

    $img = str_replace('data:image/png;base64,', '', $img);
    $fileData = base64_decode($img);
    $fileName = uniqid().'.png';

    file_put_contents("../dibujos/".$fileName, $fileData);

    echo $fileName;
?>