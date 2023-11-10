<?php

$id = $_GET['id'];
$sql = "SELECT * FROM tb_book WHERE id_book='".$id."'";
$query = $mysqli->query($sql);
$count_row = $query->num_rows;

if($count_row > 0) {
    $data = $query->fetch_assoc();
} else {
    $data = 'null';
}

?>