<?php

session_start();
require('../../lib/conect_database.php');

$id_admin = $_SESSION['id_admin'];

if (($_POST['password'] != '') and ($_POST['password_confirm'] != '')) {

    if ($_POST['password'] != $_POST['password_confirm']) {

        header('location:../../view/admin_login/edit.php?status=error_pass');
        exit(0);

    } else {

        $sql = "update tb_admin set password_admin = '" . md5($_POST['password']) . "' WHERE id_admin = '" . $id_admin . "'";
        if ($mysqli->query($sql) === true) {
            header('location:../../view/admin_login/edit.php?status=success_pass');
            exit(0);
        } else {
            header('location:../../view/admin_login/edit.php?status=error_pass');
            exit(0);
        }
    }

} else {

    header('location:../../view/admin_login/edit.php?status=error_pass');
    exit(0);
}
