<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet"type="text/css"  href="style/style.css"> 
    <title>Login</title>
    <style>
        body{
            height: 100vh;
        }
    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width:27%;">
		<a href="index.html">Home</a>
		<a href="#" style="color:#00b894;">User</a>
		<a href="organizer_login.php">Organizer</a>
		<!-- <a href="admin_login.php">Admin</a> -->
	</div>
</nav>
</header>
   <div class="wrapper">
    <h3 class="form-head">User Login</h3>
    <form action="#" method="post" class="form-block" autocomplete="on">
        <div class="registration">
        <div class="first">
        <div class="form-group">
            <label for="user_mail" class="control-label">Mail</label>
            <input type="email" name="user_mail" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group" align="center">
            <input type="submit" name="user_login" class="button-34" role="button" value="Login" >
        </div>
        </div>
    </form>
    <center>
    <a href="user_registration.php" class="letter-design"><strong>Need an account?</strong></a><br>
   </center>
</div>
   </div>




   <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>
<?php
include('webpages/connect.php');
if(isset($_POST["user_login"]))
{
    $user_mail = $_POST["user_mail"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE user_mail='$user_mail' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        $err = mysqli_error($conn);
    }
    if(mysqli_num_rows($result)>0)
    {
        session_start();
        $_SESSION["user_mail"] = $user_mail;
         header('location:user/user_home.php');

    }
    else{
        echo "<script>alert('Please enter valid Mail and Password')</script>";
    }
}
?>