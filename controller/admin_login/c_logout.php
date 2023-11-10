<?php

session_start();
session_destroy();
header("location:../../view/home/index.php");
exit(0);

?>
