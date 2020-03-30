<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julia
 * Date: 19/02/2020
 * Time: 18:12
 */
session_start();
$host = "devweb2019.cis.strath.ac.uk";
$user = "rnb16141";
$pass = "eimahQuai4Vo";
$dbname = "rnb16141";
$conn = new mysqli($host, $user, $pass, $dbname);

$entryID = rand();
$accid = $_SESSION["accept_id"];
$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$style = $_REQUEST["styleID"];
$phrase = $_REQUEST["phraseID"];

$sql = "INSERT INTO `experiment1` (`entryID`, `accept_id`, `design_id`, `phrase_id`, `touch_location_x`, `touch_location_y`) VALUES ('$entryID', '$accid', '$style', '$phrase', '$x', '$y');";


if($conn->query($sql) === TRUE){echo "x press at ".$x." and y press at ".$y;}

else{
    die("Addition Failed....sad ".$conn->connect_error); //FIXME remove once working
}

$conn->close();

