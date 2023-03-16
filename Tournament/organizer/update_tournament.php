<?php
session_start();
if(!isset($_SESSION["organizer_mail"]))
{
    header('location:organizer_login.php');
}
else if(!isset($_GET["tournament_id"]))
{
    header('location:my_tournaments.php');
}
else{
    include('../webpages/time.php');
    include('../webpages/connect.php');
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
            $country = $row["country"];
            $date = $row["date"];
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
    else{
        echo mysqli_error($conn);
    }
}
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
    <title>Update Tournament</title>
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
		<a href="organizer_home.html">Home</a>
		<a href="add_tournament.php">Add Tournament</a>
		<a href="my_tournaments.php" style="color:#00b894;">My Tournaments</a>
		<a href="../webpages/logout.php">Logout</a>
	</div>
</nav>
</header>
   <div class="wrapper">
    <h3 class="form-head">Tournament Details</h3><br>
    <form action="#" method="post" class="form-block" autocomplete="on">
        <div class="registration" style="display: flex;column-gap: 50px;padding-left:50px;">
        <div class="first">
        <div class="form-group">
            <label for="tournament_name" class="control-label">Tournament Name</label>
            <input type="text" name="tournament_name" class="form-control" value="<?php echo $tournament_name;?>" required>
        </div>
        <div class="form-group">
            <label for="organizer" class="control-label">Organizer</label>
            <input type="text" name="organizer" class="form-control" value="<?php echo $organizer;?>" required>
        </div>
        <div class="form-group">
            <label for="game" class="control-label">Select Game</label>
            <select name="game" id="game" class="form-control" required>
                <option value=''>Select</option>
                <option value='Football' <?php if($game == 'Football'){echo("selected");}?>>Football</option>
                <option value='Cricket' <?php if($game == 'Cricket'){echo("selected");}?>>Cricket</option>
                <option value='Kabaddi' <?php if($game == 'Kabaddi'){echo("selected");}?>>Kabaddi</option>
                <option value='Volley-ball' <?php if($game == 'Volley-ball'){echo("selected");}?>>Volley Ball</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category" class="control-label">Select Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value=''>Select</option>
                <option value='Under-14' <?php if($category == 'Under-14'){echo("selected");}?>>Under-14</option>
                <option value='Under-17' <?php if($category == 'Under-17'){echo("selected");}?>>Under-17</option>
                <option value='Under-19' <?php if($category == 'Under-19'){echo("selected");}?>>Under-19</option>
                <option value='Open-Match' <?php if($category == 'Open-Match'){echo("selected");}?>>Open Match</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gender" class="control-label">Select Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value=''>Select</option>
                <option value='Men' <?php if($gender == 'Men'){echo("selected");}?>>Men</option>
                <option value='Women' <?php if($gender == 'Women'){echo("selected");}?>>Women</option>
            </select>
        </div>
        <div class="form-group">
            <label for="venue" class="control-label">Venue</label>
            <input type="text" name="venue" class="form-control" value="<?php echo $venue;?>" required>
        </div>
        <div class="form-group">
            <label for="landmark" class="control-label">Landmark</label>
            <input type="text" name="landmark" class="form-control" value="<?php echo $landmark;?>" required>
        </div>
        <div class="form-group">
            <label for="district" class="control-label">District</label>
            <input type="text" name="district" class="form-control" value="<?php echo $district;?>" required>
        </div> 
        </div>
        <div class="second">
        <div class="form-group">
            <label for="state" class="control-label">State</label>
            <input type="text" name="state" class="form-control" value="<?php echo $state;?>" required>
        </div> 
        <div class="form-group">
            <label for="country" class="control-label">Country</label>
            <input type="text" name="country" class="form-control" value="<?php echo $country;?>" required>
        </div> 
        <div class="form-group">
            <label for="date" class="control-label">Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo $date;?>" min="<?php echo $$from;?>" max="<?php echo $$valid_date;?>" value="<?php echo $date;?>" required>
        </div>
        <h4 class="flex-head" align="center">Prize List</h4>
        <div class="form-group">
            <label for="first_price" class="control-label">First Price</label>
            <input type="number" name="first_price" class="form-control" value="<?php echo $first_price;?>" required>
        </div>
        <div class="form-group">
            <label for="second_price" class="control-label">Second Price</label>
            <input type="number" name="second_price" class="form-control" value="<?php echo $second_price;?>" required>
        </div>
        <div class="form-group">
            <label for="third_price" class="control-label">Third Price</label>
            <input type="number" name="third_price" class="form-control" value="<?php echo $third_price;?>" required>
        </div>
        <div class="form-group">
            <label for="additional_price" class="control-label">Additional Price</label>
            <textarea name="additional_price" class="form-control" required row="200"><?php echo $additional_price;?></textarea>
        </div>
    </div>
    <div class="third">
        <div class=""></div>
    <div class="form-group">
            <label for="entrance_fees" class="control-label">Entrance Fees</label>
            <input type="number" name="entrance_fees" class="form-control" value="<?php echo $entrance_fees;?>" required>
        </div>
        <h4 class="flex-head" align="center">Additional Information</h4>
        <div class="form-group">
            <label for="rules" class="control-label">Rules</label>
            <textarea name="rules" class="form-control" required> <?php echo $rules;?></textarea>
        </div>
        <div class="form-group">
            <label for="about_event" class="control-label">About the Event</label>
            <textarea name="about_event" class="form-control"><?php echo $about_event;?></textarea>
        </div>
        <div class="form-group">
            <label for="about_organizer" class="control-label">About the Organizers</label>
            <textarea name="about_organizer"  class="form-control"><?php echo $about_organizer;?></textarea>
        </div>
        <div class="form-group">
            <label for="contact_details" class="control-label">Contact Details</label>
            <textarea name="contact_details" class="form-control" ><?php echo $contact_details;?></textarea>
        </div>
    </div></div>
        <div class="form-group" align="center">
            <input type="submit" name="update_tournament" class="button-34" role="button" value="Update Tournament" >
            <input type="submit" name="delete_tournament" class="button-34" role="button" value="Delete Tournament" >
        </div>
        
    </form>
    </div>
   </div>




   <script src="../Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="../Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>

<?php
include('../webpages/connect.php');
if(isset($_POST["delete_tournament"]))
{
    echo "sfsdfdfsdf";
    $tournament_id = $_GET["tournament_id"];
    $sql = "DELETE FROM tournaments WHERE tournament_id = $tournament_id";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "<script>alert('Tournament Deleted Successfully');window.location='my_tournaments.php';</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
if(isset($_POST["update_tournament"]))
{
    $tournament_name = $_POST["tournament_name"]; 
    $organizer = $_POST["organizer"]; 
    $game = $_POST["game"]; 
    $category = $_POST["category"]; 
    $gender = $_POST["gender"]; 
    $venue = $_POST["venue"]; 
    $landmark = $_POST["landmark"]; 
    $district = $_POST["district"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $date = $_POST["date"]; 
    $first_price = (int)$_POST["first_price"]; 
    $second_price = (int)$_POST["second_price"]; 
    $third_price = (int)$_POST["third_price"]; 
    $additional_price = $_POST["additional_price"]; 
    $entrance_fees = (int)$_POST["entrance_fees"]; 
    $rules = $_POST["rules"]; 
    $about_event = $_POST["about_event"]; 
    $about_organizer = $_POST["about_organizer"]; 
    $contact_details = $_POST["contact_details"]; 
    $organizer_mail = $_SESSION["organizer_mail"];
    if($game == 'Kabaddi')
    {
        $image = "../images/kabaddi.png";
    }
    else if($game == 'Football'){
        $image = "../images/football.png";
    }
    else if($game == 'Cricket')
    {
        $image = "../images/cricket.png";
    }
    else{
        $image = "../images/volley_ball.png";
    }
    $sql = "UPDATE tournaments SET tournament_name='$tournament_name', organizer='$organizer', game='$game', category='$category', gender='$gender', venue='$venue', landmark='$landmark', district='$district', state='$state', country='$country', date='$date', first_price='$first_price', second_price='$second_price', 
    third_price='$third_price', additional_price='$additional_price', entrance_fees='$entrance_fees', rules='$rules', about_event='$about_event', about_organizer='$about_organizer', contact_details='$cotanct_details', image='$image' WHERE tournament_id=$tournament_id";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "<script>alert('Tournament Updated Successfully');window.location='my_tournaments.php';</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
?>