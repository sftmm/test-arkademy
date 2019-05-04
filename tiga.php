<?php

function cetak_gambar($bilangan) {


    for ($row = 1; $row <= $bilangan; $row++)
    {
        for ($col = 0; $col < $bilangan; $col++)
        {
            if($col == $bilangan-1 || $col == 0 || $row == ceil($bilangan/2)) 
            {
                echo "*&nbsp;";
            }
            else
            {
                echo "=&nbsp;";
            }
        }
        echo "</br>";
    }
}


echo cetak_gambar(5);
?>