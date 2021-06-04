<?php
    function array2hash($array_0)
    {
        $array_1 = array();
        for( $i = 0; $i < count($array_0); $i++)
            $array_1[$array_0[$i][0]] = $array_0[$i][1];
        return $array_1;
    }
?>