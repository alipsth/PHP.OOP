<?php
session_start();
if (isset($_SESSION['Login'])) {
    unset($_SESSION);
    session_destroy();
    header("location:loginweb.php");
}