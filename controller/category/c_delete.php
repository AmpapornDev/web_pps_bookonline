<?php

include("../../lib/conect_database.php");

/** ถ้าลบหมวด หนังสือ รายการหนังสือที่อยู่ในหมวดจะถูกอัพเดทเป็น 0 คือ ไม่มีหมวดแทน**/
$id = $_GET['id'];
$sql = "SELECT * FROM tb_book WHERE id_book_cate = '" . $id . "'";
$mysqli->query($sql);
$count_row = $query->num_rows;

if ($count_row > 0) {

    $sql_update = "UPDATE tb_book SET id_book_cate ='0' WHERE id_book_cate = '" . $id . "'";
    if ($mysqli->query($sql_update) === TRUE) {
        /**เมื่ออัพเดท id_category ='0' หมดแล้ว ถึงลบหมวดนั้น */
        $sql_del = "delete from tb_book_category WHERE id_book_cate = '" . $id . "'";
        if ($mysqli->query($sql_del) === TRUE) {
            header("location:../../view/category/index.php?status=success");
            exit(0);
        } else {
            header("location:../../view/category/index.php?status=error");
            exit(0);
        }
    }
} else {

    /**เมื่ออัพเดท id_category ='0' หมดแล้ว ถึงลบหมวดนั้น */
    $sql_del = "delete from tb_book_category WHERE id_book_cate = '" . $id . "'";
    if ($mysqli->query($sql_del) === TRUE) {
        header("location:../../view/category/index.php?status=success");
        exit(0);
    } else {
        header("location:../../view/category/index.php?status=error");
        exit(0);
    }
}
