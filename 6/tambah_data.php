<?php

include("connect.php");

try {
 $query = mysqli_query($kon,"UPDATE candidates SET earned_vote = earned_vote + 1 WHERE id = '". $_GET["id"] ."'");
 
  header('location:index.php');
} catch (Exception $e) {
  header('location:index.php');
}

 ?>