<?php
    $content = file_get_contents("ex01.txt","r");
    $array = str_split($content);
    foreach ($array as $char) {
        if ($char == ',')
            echo "\n";
        else
        echo $char;
       }
?>