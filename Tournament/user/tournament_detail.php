<?php
session_start();
include('../webpages/connect.php');
if(!isset($_SESSION["user_mail"]))
{
    header('location:../user_login.php');
}
else if(!isset($_GET["tournament_id"]))
{
    header('location:view_tournaments.php');
}
else{
    $tournament_id = $_GET["tournament_id"];
    $sql = "SELECT * FROM tournaments WHERE tournament_id=$tournament_id";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        if($row = mysqli_fetch_assoc($result))
        {
            $tournament_name = $row["tournament_name"];
            $organizer = $row["organizer"];
            $game = $row["game"];
            $category = $row["category"];
            $gender = $row["gender"];
            $venue = $row["venue"];
            $landmark = $row["landmark"];
            $place = $row["place"];
            $district = $row["district"];
            $state = $row["state"];
            $first_price = $row["first_price"];
            $second_price = $row["second_price"];
            $third_price = $row["third_price"];
            $additional_price = $row["additional_price"];
            $entrance_fees = $row["entrance_fees"];
            $rules = $row["rules"];
            $about_event = $row["about_event"];
            $about_organizer = $row["about_organizer"];
            $contact_details = $row["contact_details"];
            $organizer_mail = $row["organizer_mail"];
            $image = $row["image"];
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
    <title>Tournament Detail</title>
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
		<a href="#" style="color:#00b894;">Upcomming</a>
		<a href="my_registrations.php">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
   <div class="tournament-detail-wrapper">
    <h3 class="form-head" align="center">Tournament Detail</h3><br>
    <div class="go-back">
    <a href="view_tournaments.php" class="button-47">Go Back</a>
    </div>
        <div class="side-element">
            <h3 align="center"style="color:white;"><?php echo "$tournament_name";?></h3>
            <div class="main-content">
            <div class="inside-content"> 
            <h4>Tournament Details</h4>
            <p>Tournament Name  -  <?php echo "$tournament_name";?><br>
            Organizer  -  <?php echo "$organizer";?><br>
            Game  -  <?php echo "$game";?><br>
            Category  -  <?php echo "$category";?><br>
            Gender  -  <?php echo "$gender";?><br><p>
            </div>
            <div class="inside-content">
            <h4>Address</h4>
            <p>Venue  -  <?php echo "$venue";?><br>
            Landmark  -  <?php echo "$landmark";?><br>
            Place  -  <?php echo "$place";?><br>
            District  -  <?php echo "$district";?><br>
            State  -  <?php echo "$state";?><br></p>
            </div>
            <div class="inside-content">
            <h4>Price List</h4>
            <p>First Price  -  <?php echo "$first_price";?><br>
            Second Price  -  <?php echo "$second_price";?><br>
            Third Price  -  <?php echo "$third_price";?><br>
            Additional Price  -  <?php echo "$additional_price";?><br></p>
            </div>
            <div class="inside-content">
            <h4>Entrance Fees</h4>
            <p>Entrance Fees  -  <?php echo "$entrance_fees";?><br></p>
            </div>
            <div class="inside-content">
            <h4>Rules and Regulations</h4>
            <p><?php echo "$rules";?><br></p>
            </div>
            <div class="inside-content">
            <h4>About Event</h4>
            <p><?php echo "$about_event";?><br></p>
            </div>
            <div class="inside-content">
            <h4>About Organizer</h4>
            <p><?php echo "$about_organizer";?><br></p>
            </div>
            <div class="inside-content">
            <h4>Contact Details</h4>
            <p><?php echo "$contact_details";?><br>
            Organizer Mail  -  <?php echo "$organizer_mail";?><br></p>
        </div>
    <div align="center">
        <?php 
        if($status == 0){?>
            <a href="registration.php?tournament_id=<?php echo $tournament_id;?>"class="button-62" >Register</a>
        <?php }
        else{?>
            <p class="button-62">Closed</p>
        <?php }?>
            </div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>