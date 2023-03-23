<?php
session_start();
if(!isset($_SESSION["user_mail"]))
{
    header('location:user_login.php');
}
include('../webpages/time.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet"type="text/css"  href="../style/style.css"> 
    <title>My Tournaments</title>
    <style>
        body{
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width:35%;">
		<a href="#"style="color:#00b894;">Home</a>
		<a href="view_tournaments.php">Upcomming</a>
		<a href="my_registrations.php">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
   <div class="wrapper">
    <marquee><h3 class="neonText">Welcome To Tournament Spot</h3></marquee><br>
</div>
   </div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>