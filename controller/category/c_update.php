<?php

require("../../lib/conect_database.php");

$id = $_POST['id_book_cate'];
$name_book_cate = $_POST['name_book_cate'];
$id_user = '0';
$edit_date = date("Y-m-d h:i:s");

$sql = "UPDATE tb_book_category SET name_book_cate ='".$name_book_cate."', id_user = '".$id_user."', edit_date = '".$edit_date."' WHERE id_book_cate = '".$id."'";
if ($mysqli->query($sql) === TRUE) {

    header("location:../../view/category/edit.php?id=$id&status=success");
    exit(0);

}else {

    header("location:../../view/category/edit.php?id=$id&status=error");
    exit(0);

}
