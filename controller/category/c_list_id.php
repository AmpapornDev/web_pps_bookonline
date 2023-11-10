<?php

$id_book_cate = $_GET['id'];

$sql = "SELECT * FROM tb_book_category WHERE id_book_cate = '$id_book_cate'";
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