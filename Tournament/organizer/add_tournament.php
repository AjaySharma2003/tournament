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
    <title>Add Tournament</title>
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
	<div class="menu">
		<a href="organizer_home.html">Home</a>
		<a href="#" style="color:#00b894;">Add Tournament</a>
		<a href="my_tournaments.php">My Tournaments</a>
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
            <input type="text" name="tournament_name" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="organizer" class="control-label">Organizer</label>
            <input type="text" name="organizer" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="game" class="control-label">Select Game</label>
            <select name="game" id="game" class="form-control" required>
                <option value=''>Select</option>
                <option value='Football'>Football</option>
                <option value='Cricket'>Cricket</option>
                <option value='Kabaddi'>Kabaddi</option>
                <option value='Volley-ball'>Volley Ball</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category" class="control-label">Select Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value=''>Select</option>
                <option value='Under-14'>Under-14</option>
                <option value='Under-17'>Under-17</option>
                <option value='Under-19'>Under-19</option>
                <option value='Open-Match'>Open Match</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gender" class="control-label">Select Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value=''>Select</option>
                <option value='Men'>Men</option>
                <option value='Women'>Women</option>
            </select>
        </div>
        <div class="form-group">
            <label for="venue" class="control-label">Venue</label>
            <input type="text" name="venue" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="landmark" class="control-label">Landmark</label>
            <input type="text" name="landmark" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="district" class="control-label">District</label>
            <input type="text" name="district" class="form-control"  required>
        </div> 
        </div>
        <div class="second">
        <div class="form-group">
            <label for="state" class="control-label">State</label>
            <input type="text" name="state" class="form-control"  required>
        </div> 
        <div class="form-group">
            <label for="country" class="control-label">Country</label>
            <input type="text" name="country" class="form-control"  required>
        </div> 
        <div class="form-group">
            <label for="date" class="control-label">Date</label>
            <input type="date" name="date" class="form-control" min="<?php echo $from;?>" max="<?php echo $valid_date;?>" required>
        </div>
        <h4 class="flex-head" align="center">Prize List</h4>
        <div class="form-group">
            <label for="first_price" class="control-label">First Price</label>
            <input type="number" name="first_price" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="second_price" class="control-label">Second Price</label>
            <input type="number" name="second_price" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="third_price" class="control-label">Third Price</label>
            <input type="number" name="third_price" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="additional_price" class="control-label">Additional Price</label>
            <textarea name="additional_price" class="form-control" required row="200"></textarea>
        </div>
    </div>
    <div class="third">
        <div class=""></div>
    <div class="form-group">
            <label for="entrance_fees" class="control-label">Entrance Fees</label>
            <input type="number" name="entrance_fees" class="form-control"  required>
        </div>
        <h4 class="flex-head" align="center">Additional Information</h4>
        <div class="form-group">
            <label for="rules" class="control-label">Rules</label>
            <textarea name="rules" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="about_event" class="control-label">About the Event</label>
            <textarea name="about_event" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="about_organizer" class="control-label">About the Organizers</label>
            <textarea name="about_organizer" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="contact_details" class="control-label">Contact Details</label>
            <textarea name="contact_details" class="form-control"></textarea>
        </div>
    </div></div>
        <div class="form-group" align="center">
            <input type="submit" name="add_tournament" class="button-34" role="button" value="Add Tournament" >
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
if(isset($_POST["add_tournament"]))
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
    $sql = "INSERT INTO tournaments(tournament_name,organizer,game,category,gender,venue,landmark,district,state,country,date,first_price,second_price,third_price,additional_price, entrance_fees, rules, about_event, about_organizer, contact_details, organizer_mail,image)
    VALUES('$tournament_name','$organizer','$game','$category','$gender','$venue','$landmark','$district','$state','$country','$date',$first_price,$second_price,$third_price, '$additional_price' ,$entrance_fees, '$rules', '$about_event', '$about_organizer', '$contact_details', '$organizer_mail','$image')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "<script>alert('Tournament Added Successfully')</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
?>