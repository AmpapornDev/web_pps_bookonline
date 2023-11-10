<?php

require("../../lib/conect_database.php");

$id = $_POST['id'];
$name_book = $_POST['namebook_book'];
$isbn_book = $_POST['isbn_book'];
$author = $_POST['author_book'];
$price_book = $_POST['price_book'];
$detail_book = $_POST['detail_book'];
$id_book_cate = $_POST['id_book_cate'];

print_r("image_book = ".$_FILES['image_book']['name']);

/////// เช็คว่ามีการ แก้ไขรูปจาก ฟอร์มมั้ย ////
if ($_FILES['image_book']['name'] != '') {

    $image = $_FILES['image_book']['name'];
    $tmp = $_FILES['image_book']['tmp_name'];
    move_uploaded_file($tmp, "../../assets/image/cover_book/".$image);

    $update_imge = "UPDATE tb_book SET image_book = '".$image."' WHERE id_book = '".$id."'";
    $mysqli->query($update_imge);

}

$sql = "UPDATE tb_book SET id_book_cate = '".$id_book_cate."', namebook_book ='".$name_book."', isbn_book = '".$isbn_book."', author_book = '".$author."', price_book = '".$price_book."', detail_book = '".$detail_book."' WHERE id_book = '".$id."'";
if ($mysqli->query($sql) === TRUE) {

    header("location:../../view/home/edit.php?id=$id&status=success");
    exit(0);

}else {

    header("location:../../view/home/edit.php?id=$id&status=error");
    exit(0);

}
