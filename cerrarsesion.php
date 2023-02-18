<?php

session_start();
$_SESSION["user_cursos"];
session_unset($_SESSION["user_cursos"]);
session_destroy($_SESSION["user_cursos"]);

setcookie('password', '123', time() + (60 * 60 * 24 * 365));
$_SESSION["user_cursos"] = '';
setcookie('user', 'cliente', time() + (60 * 60 * 24 * 365));
header("Location: login.php");
