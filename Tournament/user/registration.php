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
if(isset($_POST["register"]))
{
    $tournament_id = $_GET["tournament_id"];
    $team_name = $_POST["team_name"];
    $captain_name = $_POST["captain_name"];
    $vice_captain_name = $_POST["vice_captain_name"];
    $captain_contact_number = $_POST["captain_contact_number"];
    $vice_captain_contact_number = $_POST["vice_captain_contact_number"];
    $team_mail_id = $_POST["team_mail_id"];
    $street_name = $_POST["street_name"];
    $area = $_POST["area"];
    $team_district = $_POST["team_district"];
    $team_state = $_POST["team_state"];
    $pin_code = $_POST["pin_code"];
}
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
    <title>Registration</title>
    <style>
        body{
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tournament-detail-wrapper .side-element{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.inside-content
{
    width:100%;
  padding: 20px;
  background-color: white;
  word-wrap: break-word;
  border-radius: 10px;
  font-size: 16px;
  justify-content: center;
  align-items: center;
}
.inside-element{
    display: flex;
    flex-direction: column;
    margin-top: -50px;
}
.inside-content h4{
    font-size: 22px;
}
.top-tournament-detail{
    font-size:20px;
}
    </style>
</head>
<body>
<header>
<nav>
	<div class="logo"> <h1 style="font-size: 20px;" class="neonText"> Tournament Spot </h1> </div>
	<div class="menu" style="width:40%;">
		<a href="user_home.html">Home</a>
		<a href="#" style="color:#00b894;">Upcomming</a>
		<a href="#">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
   <div class="tournament-detail-wrapper">
    <h3 class="form-head" align="center">Registration</h3><br>
    <div class="go-back">
    <?php
    if(isset($_GET["tournament_id"]))
    {
        echo"
    <a href='tournament_detail.php?tournament_id=$tournament_id' class='button-47'>Go Back</a>";
    }
    else{
        echo "
        <a href='view_tournaments.php' class='button-47'>Go Back</a>";
    }
    ?>
    </div> 
    <div class="top-tournament-detail" align="center">
    <h3>Tournament Details</h3>
            <p>Tournament Name  -  <?php echo "$tournament_name";?><br>
            Organizer  -  <?php echo "$organizer";?><br>
            Game  -  <?php echo "$game";?><br>
            Category  -  <?php echo "$category";?><br>
            Gender  -  <?php echo "$gender";?><br>
            Entrance Fees  -  <?php echo $entrance_fees;?></p>
    </div>
        <div class="side-element">
            <div class="main-content">
            <div class="inside-content"> 
            <h3 class="form-head" align="center">Team Registration</h3>
            <form action="#" method="post" class="form-block" autocomplete="on">
            <div class="inside-element">
            <div class="form-group">
            <label for="team_name" class="control-label">Team Name</label>
            <input type="text" name="team_name" class="form-control" value="<?php echo $team_name;?>" required>
            </div>
            <div class="form-group">
            <label for="captain_name" class="control-label">Captain Name</label>
            <input type="text" name="captain_name" class="form-control" value="<?php echo $captain_name;?>" required>
            </div>
            <div class="form-group">
            <label for="vice_captain_name" class="control-label">Vice Captain Name</label>
            <input type="text" name="vice_captain_name" class="form-control" value="<?php echo $vice_captain_name;?>" required>
            </div>
            <div class="form-group">
            <label for="captain_contact_number" class="control-label">Captain Contact Number</label>
            <input type="tell" name="captain_contact_number" class="form-control" pattern="[6-9]{1}[0-9]{9}" title="Enter a valid Mobile Number"value="<?php echo $captain_contact_number;?>" required>
            </div>
            <div class="form-group">
            <label for="vice_captain_contact_number" class="control-label">Vice Captain Contact Number</label>
            <input type="tell" name="vice_captain_contact_number" pattern="[6-9]{1}[0-9]{9}" title="Enter a valid Mobile Number" class="form-control" value="<?php echo $vice_captain_contact_number;?>" required>
            </div>
            <div class="form-group">
            <label for="team_mail_id" class="control-label">Team Or Captain Mail</label>
            <input type="email" name="team_mail_id" class="form-control" value="<?php echo $team_mail_id;?>" required>
            </div>
            <div class="form-group">
            <label for="street_name" class="control-label">Street Name</label>
            <input type="text" name="street_name" class="form-control" value="<?php echo $street_name;?>" required>
            </div>
            <div class="form-group">
            <label for="area" class="control-label">Area</label>
            <input type="text" name="area" class="form-control" value="<?php echo $area;?>" required>
            </div>
            <div class="form-group">
            <label for="team_district" class="control-label">District</label>
            <input type="text" name="team_district" class="form-control" value="<?php echo $team_district;?>" required>
            </div>
            <div class="form-group">
            <label for="team_state" class="control-label">State</label>
            <input type="text" name="team_state" class="form-control" value="<?php echo $team_state;?>" required>
            </div>
            <div class="form-group">
            <label for="pin_code" class="control-label">Pin Code</label>
            <input type="tell" name="pin_code" pattern="[0-9]{6}" title="Enter a valid Pin Code" class="form-control" value="<?php echo $pin_code;?>" required>
            </div>
            <div align="center" style="margin-left:100px">
            <input type="submit" name="register" class="button-62" value="Register">
            </div>
            </form>
            </div></div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>
<?php
include('../webpages/connect.php');
if(isset($_POST["register"]))
{
    $tournament_id = $_GET["tournament_id"];
    $team_name = $_POST["team_name"];
    $captain_name = $_POST["captain_name"];
    $vice_captain_name = $_POST["vice_captain_name"];
    $captain_contact_number = $_POST["captain_contact_number"];
    $vice_captain_contact_number = $_POST["vice_captain_contact_number"];
    $team_mail_id = $_POST["team_mail_id"];
    $street_name = $_POST["street_name"];
    $area = $_POST["area"];
    $team_district = $_POST["team_district"];
    $team_state = $_POST["team_state"];
    $pin_code = $_POST["pin_code"];
    $sql = "SELECT * FROM registration WHERE tournament_id=$tournament_id AND team_name='$team_name'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "<script>alert('Team Name already registered for this Tournament')</script>";
    }
    else{
    $sql = "INSERT INTO registration (tournament_id, team_name, captain_name, vice_captain_name, captain_contact_number, vice_captain_contact_number, team_mail_id, street_name, area, district, state, pin_code, user_mail) 
    VALUES($tournament_id, '$team_name', '$captain_name', '$vice_captain_name', '$captain_contact_number', '$vice_captain_contact_number','$team_mail_id', '$street_name', '$area', '$team_district', '$team_state', '$pin_code', '$user_mail')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "<script>alert('Team Registered Successfully')</script>";
    } 
    else{
        echo mysqli_error($conn);
    }
}
}
?>