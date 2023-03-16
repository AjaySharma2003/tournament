<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('Y-m-d');
$today_str = strtotime($today);
$from = date('Y-m-d',strtotime("+7 day", $today_str));
$valid_date = date('Y-m-d',strtotime("+2 month", $today_str));
$time_now = date('H:i:s');
?>