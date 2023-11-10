<?php
session_start();
require("../../lib/conect_database.php");

$id_admin = $_SESSION['id_admin'];
$name_admin = $_POST['name_admin'];
$lastname_admin = $_POST['lastname_admin'];
$email_admin = $_POST['email_admin'];

$sql = "UPDATE tb_admin SET name_admin = '" . $name_admin . "', lastname_admin ='" . $lastname_admin . "' , email_admin ='" . $email_admin . "' WHERE id_admin = '" . $id_admin . "'";
if ($mysqli->query($sql) === TRUE) {

    $sql = "select * from tb_admin where id_admin = '" . $id_admin . "'";
    $query = $mysqli->query($sql);
    $data = $query->fetch_assoc();

    //session_destroy();
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['name_admin'] = $data['name_admin'];
    $_SESSION['lastname_admin'] = $data['lastname_admin'];
    $_SESSION['email_admin'] = $data['email_admin'];

    header("location:../../view/admin_login/edit.php?status=success");
    exit(0);
} else {

    header("location:../../view/admin_login/edit.php?status=error");
    exit(0);
}
