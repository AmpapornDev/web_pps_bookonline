<?php

session_start();
require("../../lib/conect_database.php");

$id_admin = $_SESSION['id_admin'];
$sql = "SELECT * FROM tb_admin WHERE id_admin='".$id_admin."'";
$query = $mysqli->query($sql);
$count_row = $query->num_rows;

if($count_row > 0) {
    $data = $query->fetch_assoc();
} else {
    $data = 'null';
}

?>