<?php
    include './koneksi.php';
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
    header(header: 'location:login.php');
?>