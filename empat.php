<?php

function sort_array($dataku)
{
    $array_utama= array();
    for ($i=0; $i < count($dataku); $i++) { 
        asort($dataku[$i]);
        $array_utama[$i] = $dataku[$i]; 
    }

    return $array_utama;
}

$data = array(
    array("s","y","a","o","z"),
    array("s","y","a","o","z")
);
print_r(sort_array($data));
?>

