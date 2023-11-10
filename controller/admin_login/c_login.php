<?php

session_start();
require('../../lib/conect_database.php');

$email_admin = $_POST['email_admin'];
$password_admin = md5($_POST['password_admin']);

//check username  & password
$sql = "select * from tb_admin where email_admin = '".$email_admin."' and password_admin = '".$password_admin."' ";
$query = $mysqli->query($sql);
$count = $query->num_rows;

//กรอก username & password ถูกต้อง
if ($count == 1) {
    
    $data = $query->fetch_assoc();
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['name_admin'] = $data['name_admin'];
    $_SESSION['lastname_admin'] = $data['lastname_admin'];
    $_SESSION['email_admin'] = $data['email_admin'];

    header("location:../../view/home/index.php");
    exit(0);

} else {
    
    //ถ้า username or password ไม่ถูกต้อง
    header("location:../../view/home/index.php");
    exit(0);

}
?>
