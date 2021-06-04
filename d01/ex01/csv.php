<?php
    $content = file_get_contents("ex01.txt","r");
    $array = explode(',', $content);
    foreach ($array as $char) {
        echo $char.PHP_EOLpitechpluspitechplus;
    }
?>