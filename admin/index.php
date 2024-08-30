
<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
    exit();
}


include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'content.php';?>
<?php include 'footer.php';?>
        


           

