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
    <title>Registration</title>
    <style>
    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width:27%;">
		<a href="index.html">Home</a>
		<a href="user_login.php">User</a>
		<a href="#" style="color:#00b894;">Organizer</a>
		<!-- <a href="admin_login.php">Admin</a> -->
	</div>
</nav>
</header>
   <?php
   if(isset($_POST["register"]))
   {
    $organizer_name = $_POST["organizer_name"];
    $organizer_mail = $_POST["organizer_mail"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
   }
   ?>
   <div class="wrapper">
    <h3 class="form-head">organizer Registration</h3>
    <form action="#" method="post" class="form-block" autocomplete="on">
        <div class="registration">
        <div class="first">
        <div class="form-group">
            <label for="organizer_name" class="control-label">Name</label>
            <input type="text" name="organizer_name" class="form-control" value="<?php echo $organizer_name;?>" required>
        </div>
        <div class="form-group">
            <label for="organizer_mail" class="control-label">Mail</label>
            <input type="email" name="organizer_mail" class="form-control" value="<?php echo $organizer_mail;?>" required>
        </div>
        <div class="form-group">
            <label for="mobile_number" class="control-label">Mobile Number</label>
            <input type="tell" name="mobile_number" value="<?php echo $mobile_number;?>" pattern="[6-9]{1}[0-9]{9}" title="Enter a valid Mobile Number" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required>
        </div>
        <div class="form-group">
            <label for="c_password" class="control-label">Confirm Password</label>
            <input type="password" name="c_password" class="form-control" value="<?php echo $c_password;?>" required>
        </div>
        <div class="form-group" align="center">
            <input type="submit" name="register" class="button-34" role="button" value="Register" >
        </div>
        </div>
    </form>
    <center>
    <a href="organizer_login.php" class="letter-design"><strong>Already have an account?</strong></a><br>
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
if(isset($_POST["register"]))
{
    $organizer_name = $_POST["organizer_name"];
    $organizer_mail = $_POST["organizer_mail"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
    $sql = "SELECT organizer_mail from organizers WHERE organizer_mail='$organizer_mail'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "<script>alert('Given Mail Id is already Registered');</script>";
    }
    else{
    if($password == $c_password)
    {
        $sql = "INSERT INTO organizers(organizer_name, organizer_mail, mobile_number, password) VALUES('$organizer_name','$organizer_mail',$mobile_number ,'$password')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Registered Successfully');window.location='organizer_login.php';</script>";
        }
        else{
            echo mysqli_error($conn);
        }
    }
    else{
        echo "<script>alert('Password and Confirm password should be same');</script>";
    }
}
}
?> 