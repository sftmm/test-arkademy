<?php
 

 
function cetak_tiga($input) {
	$tami = '';
	for ($j=0; $j < $input ; $j++) { 
		$karakternya = "0123456789abcdefghijklmnopqrstuvwxyz";
        $panjang_chara = strlen($karakternya);
        $acak = '';
        for($i = 0; $i < 32; $i++) {
            $acak .= $karakternya[rand(0, $panjang_chara -1)];
        }
        if (preg_match("/^".$acak."/", $tami)) {
            continue;
        }else
        {
            $tami .= "</br>".$acak;    
        }
        
    }
    return $tami;
}

echo cetak_tiga(3);

 
?>