<?php
if (!isset($_SESSION)) {
    session_start();
};


session_destroy();
header('Location:/S2-L1-Login/login.php');