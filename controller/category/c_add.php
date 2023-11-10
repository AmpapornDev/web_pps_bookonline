<?php

require('../../lib/conect_database.php');

$name_book_cate = $_POST['name_book_cate'];
$id_user = '0';
$add_date = date("Y-m-d h:i:s");
$edit_date = date("Y-m-d h:i:s");

$sql = "insert into tb_book_category(name_book_cate,id_user,add_date,edit_date) 
VALUES ('" . $name_book_cate . "','" . $id_user . "','" . $add_date . "','" . $edit_date ."')";

if ($mysqli->query($sql) === TRUE) {

  header("location:../../view/category/index.php?status=success");
  exit(0);
} else {

  header("location:../../view/category/index.php?status=error");
  exit(0);
}
