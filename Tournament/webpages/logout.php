<?php
session_start();
session_abort();
session_destroy();
include("refresh.php");
header('location:../index.html');
?>