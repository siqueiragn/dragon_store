<?php
session_start();
unset($_SESSION['autenticado']);
session_destroy();
header('location:../public/index.php');
