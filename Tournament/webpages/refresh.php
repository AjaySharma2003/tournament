<?php 
include("connect.php");
include("time.php");
$sql = "UPDATE tournaments SET status=1 Where date<'$today'";
$result = mysqli_query($conn, $sql);
$sql = "SELECT tournament_id from tournaments WHERE status=1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
    $tournament_id = $row["tournament_id"];
    $sql = "UPDATE registration SET status = 1 WHERE tournament_id = $tournament_id";
    $result1 = mysqli_query($conn, $sql);
}
?>