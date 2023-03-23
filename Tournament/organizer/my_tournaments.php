<?php
session_start();
if(!isset($_SESSION["organizer_mail"]))
{
    header('location:organizer_login.php');
}
include('../webpages/time.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Bootstrap/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet"type="text/css"  href="../style/style.css"> 
    <title>My Tournament</title>
    <style>
        body{
            background-size: cover;
            height: 100%;
        }
    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width: 40%;">
		<a href="organizer_home.php">Home</a>
		<a href="add_tournament.php">Add Tournament</a>
		<a href="#" style="color:#00b894;">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
<div class="wrapper">
    <h3 class="form-head">My Tournaments</h3>
    <h3 class="form-head">Upcomming Tournaments</h3><br>
    <div class="view-container" align="center"style="margin-left:0px;">
    <?php
    function display($tournament_id,$tournament_name,$organizer,$game,$venue,$district,$state, $date, $image)
    {
    ?>
    <div class="card-block" style="margin-left:00px;">
        <div class="image">
          <img src="<?php echo $image;?>" class="image" alt=""><br>
        </div>
        <div class="content">
        <div class="first-element">
        <div class="inside-element" align="center"><h4><?php echo $tournament_name;?></h4></div>
        <div class="inside-element">Organizer - <?php echo $organizer;?></div>
        <div class="inside-element">Venue - <?php echo "$venue, $district, $state";?></div>
        <div class="inside-element">Date - <?php echo $date;?></div>
        </div>
        <div class="last-element">
          <div class="">
            <a href="tournament_detail.php?tournament_id=<?php echo $tournament_id;?>" class="button-47">Know More</a>
          </div>
          <div class="">
            <a href="update_tournament.php?tournament_id=<?php echo $tournament_id;?>"class="button-47">Update</a>
          </div>
          <div class="">
            <a href="view_teams.php?tournament_id=<?php echo $tournament_id;?>" class="button-47">View Teams</a>
          </div>
        </div>
      </div></div>
    <?php }?>

<?php
include("../webpages/connect.php");
$organizer_mail = $_SESSION["organizer_mail"];
$sql = "SELECT * FROM tournaments WHERE organizer_mail='$organizer_mail' AND STATUS = 0 ORDER BY tournament_id DESC";
$result = mysqli_query($conn, $sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $tournament_id = $row["tournament_id"];
        $tournament_name = $row["tournament_name"];
        $organizer = $row["organizer"];         
        $game = $row["game"];
        $venue = $row["venue"];
        $district = $row["district"];
        $state = $row["state"];
        $date = $row["date"];
        $image=$row["image"];
        display($tournament_id,$tournament_name,$organizer,$game,$venue,$district,$state, $date,$image);
    }
    if(mysqli_num_rows($result)==0){
      echo "No Tournaments are conducted by you";
    }
}
else{
  echo mysqli_error($conn);
}
?>
</div>
   </div>
   <h3 class="form-head"align = "center">Past Tournaments</h3><br>
    <div class="view-container" align="center"style="margin-left:0px;">
    <?php
    function display1($tournament_id,$tournament_name,$organizer,$game,$venue,$district,$state, $date, $image)
    {
    ?>
    <div class="card-block" style="margin-left:00px;">
        <div class="image">
          <img src="<?php echo $image;?>" class="image" alt=""><br>
        </div>
        <div class="content">
        <div class="first-element">
        <div class="inside-element" align="center"><h4><?php echo $tournament_name;?></h4></div>
        <div class="inside-element">Organizer - <?php echo $organizer;?></div>
        <div class="inside-element">Venue - <?php echo "$venue, $district, $state";?></div>
        <div class="inside-element">Date - <?php echo $date;?></div>
        </div>
        <div class="last-element">
          <div class="">
            <a href="tournament_detail.php?tournament_id=<?php echo $tournament_id;?>" class="button-47">Know More</a>
          </div>
          <div class="">
            <a class="button-47" disabled>Update</a>
          </div>
          <div class="">
            <a href="view_teams.php?tournament_id=<?php echo $tournament_id;?>" class="button-47">View Teams</a>
          </div>
        </div>
      </div></div>
    <?php }?>

<?php
include("../webpages/connect.php");
$organizer_mail = $_SESSION["organizer_mail"];
$sql = "SELECT * FROM tournaments WHERE organizer_mail='$organizer_mail' AND status = 1 ORDER BY tournament_id DESC";
$result = mysqli_query($conn, $sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $tournament_id = $row["tournament_id"];
        $tournament_name = $row["tournament_name"];
        $organizer = $row["organizer"];         
        $game = $row["game"];
        $venue = $row["venue"];
        $district = $row["district"];
        $state = $row["state"];
        $date = $row["date"];
        $image=$row["image"];
        display1($tournament_id,$tournament_name,$organizer,$game,$venue,$district,$state, $date,$image);
    }
    if(mysqli_num_rows($result)==0){
      echo "No Tournaments are conducted by you";
    }
}
else{
  echo mysqli_error($conn);
}
?>
</div>
   </div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>