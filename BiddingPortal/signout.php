<?php
session_start();
unset($_SESSION["email_id"]);
session_destroy();
header("Location:../Frontend/login-signup/index.html");
?>