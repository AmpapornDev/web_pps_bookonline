<?php

require('../../lib/conect_database.php');
$id_book_cate = $_POST['id_book_cate'];
$namebook_book = $_POST['namebook_book'];
$isbn_book = $_POST['isbn_book'];
$author_book = $_POST['author_book'];
$price_book = $_POST['price_book'];
$detail_book = $_POST['detail_book'];
$date_time = date("Y-m-d h:i:s");
move_uploaded_file($_FILES['image_book']['tmp_name'], "../../assets/image/cover_book/" . $_FILES['image_book']['name']);

$sql = "insert into tb_book(id_book_cate,namebook_book,isbn_book,author_book,price_book,image_book,detail_book,date_time) 
VALUES ('".$id_book_cate."','" . $namebook_book . "','" . $isbn_book . "','" . $author_book . "','" . $price_book . "','" . $_FILES['image_book']['name'] . "','" . $detail_book . "','" . $date_time . "')";

if ($mysqli->query($sql) === TRUE) {

  header("location:../../view/home/index.php?status=success");
  exit(0);
} else {

  header("location:../../view/home/index.php?status=error");
  exit(0);
}
