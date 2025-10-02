<?php

require_once 'C:/xampp/htdocs/php-blog-vanilla/init.php';

session_unset();
session_destroy();

header("Location: " . BASE_URL . "/admin-panel/pages/auth/view/login.php");
exit;
