<?php

$id_book = $_GET['id'];
$qury = "SELECT * FROM tb_book WHERE id_book = '$id_book'";
$query = $mysqli->query($sql);
$count_row = $query->num_rows;

if($count_row > 0){
    // echo "Sucess";
    $data = $query->fetch_assoc();
}
else{
    $data = 'null';
}

?>