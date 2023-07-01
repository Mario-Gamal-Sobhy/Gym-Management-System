<?php
session_start();
if (isset($_SESSION['Fname'])) {
    unset($_SESSION['Fname']);
    session_destroy();
    header("Location:feedback.html");
    die;
}