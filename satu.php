<?php

 function getJSON($name_, $address_, $hobbies_, $is_married_, $school_, $skills_) {
 	$json = array(
 		'name' => $name_,
 		'address' => $address_, 
 		'hobbies' => $hobbies_,
 		'is_married' => $is_married_,
 		'school' => $school_,
 		'skills' => $skills_ 
 
 	);

 	return json_encode($json);

}

$nama = "sofi utami";
$address = "banjarnegara";
$hobbies = array("menyanyi","membaca");
$is_married = False;
$school = array(
 		'highSchool' => "SMK N 1 Bawang",
 		'university' => "null" 
 	);
$skills = array("QA","Frontend Web Developer");

echo getJSON($nama, $address, $hobbies, $is_married, $school, $skills);

?>

