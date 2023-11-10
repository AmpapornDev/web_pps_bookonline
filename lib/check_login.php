<?php 

include('conect_database.php');

//สร้างเงื่อนไขตรวจสอบสิทธิ์การเข้าใช้งานจาก session
if (empty($_SESSION['id_admin']) && empty($_SESSION['email_admin'])) {
    session_destroy();
    header("location:../../view/admin_login/index.php");
    exit(0);
}
?>
