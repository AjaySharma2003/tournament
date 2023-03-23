<?php
session_start();
include('../webpages/connect.php');
if(!isset($_SESSION["user_mail"]))
{
    header('location:../user_login.php');
}
else if(!isset($_GET["team_id"]))
{
    header('location:my_registrations.php');
}
else{
    $team_id = $_GET["team_id"];
    $sql = "SELECT * FROM registration WHERE team_id=$team_id";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        if($row = mysqli_fetch_assoc($result))
        {
            $tournament_id = $row["$tournament_id"];
            $team_id = $row["team_id"];
            $team_name = $row["team_name"];
            $captain_name = $row["captain_name"];
            $vice_captain_name = $row["vice_captain_name"];
            $captain_contact_number = $row["captain_contact_number"];
            $vice_captain_contact_number = $row["vice_captain_contact_number"];
            $team_mail_id = $row["team_mail_id"];
            $street_name = $row["street_name"];
            $area = $row["area"];
            $district = $row["district"];
            $state = $row["state"];
            $pin_code = $row["pin_code"];
            $user_mail = $row["user_mail"];
            $status = $row["status"];
        }
    }
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
    <title>Team Detail</title>
    <style>
        body{
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tournament-detail-wrapper .side-element{
  display: flex;
  flex-direction: column;
  padding-left: 100px;
  padding-right: 100px;
}
.inside-content
{
  width: 100%;
  padding: 20px;
  margin: 20px;
  background-color: white;
  align-items: left;
  justify-items: left;
  word-wrap: break-word;
  border-radius: 10px;
  font-size: 17px;
}
.inside-content h4{
    font-size: 22px;
}

    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width:40%;">
		<a href="user_home.php">Home</a>
		<a href="view_tournaments.php">Upcomming</a>
		<a href="#" style="color:#00b894;">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
   <div class="tournament-detail-wrapper">
    <h3 class="form-head" align="center">Team Detail</h3><br>
    <div class="go-back">
    <a href="my_registrations.php" class="button-47">Go Back</a>
    </div>
        <div class="side-element">
            <h3 align="center"style="color:white;"><?php echo "$tournament_name";?></h3>
            <div class="main-content">
            <div class="inside-content"> 
            <h4>Team Details</h4>
            <p>Team Name  -  <?php echo "$team_name";?><br>
            Captain  -  <?php echo "$captain_name";?><br>
            Vice captain  -  <?php echo "$vice_captain_name";?><br><p>
            </div>
            <div class="inside-content">
            <h4>Address</h4>
            <p>Street  -  <?php echo "$street_name";?><br>
            Area  -  <?php echo "$area";?><br>
            District  -  <?php echo "$district";?><br>
            State  -  <?php echo "$state";?><br>
            Pin Code  -  <?php echo "$pin_code";?><br></p>
            </div>
            <div class="inside-content">
            <h4>Contact Details</h4>
            <p>
            Captain contact  -  <?php echo "$captain_contact_number";?><br>
            vice captain contact  -  <?php echo "$vice_captain_contact_number";?><br>
            Team Mail  -  <?php echo "$team_mail_id";?><br>
            User Mail  -  <?php echo "$user_mail";?><br>
        </p>
        </div>
    <div align="center">
        <?php 
        if($status == 0)
        {
        ?>

        <form method="POST">
            <input type="submit" value="Withdraw" name="withdraw" class="button-62">
        </form>
        <?php }?>
            </div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>
<?php
if(isset($_POST["withdraw"]))
{
    include("../webpages/connect.php");
    $team_id = $_GET["team_id"];
    $sql = "DELETE FROM registration WHERE team_id = $team_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Team Excluded Successfully');window.location = 'my_registrations.php';</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
?>