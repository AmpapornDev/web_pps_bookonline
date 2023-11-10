<?php 

include ("../../lib/conect_database.php");

$id = $_GET['id'];
$sql = "delete from tb_book WHERE id_book = '".$id."'";

if ($mysqli->query($sql) === TRUE) {

    header("location:../../view/home/index.php?status=success");
    exit(0);
    
  } else {
  
    header("location:../../view/home/index.php?status=error");
    exit(0);
  }


?>