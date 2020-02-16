<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julia
 * Date: 16/02/2020
 * Time: 17:46
 */
session_start();
$host = "devweb2019.cis.strath.ac.uk";
$user = "rnb16141";
$pass = "eimahQuai4Vo";
$dbname = "rnb16141";
$conn = new mysqli($host, $user, $pass, $dbname);

$entryID = rand();
$accid = 4;
$backspace = $_REQUEST["bsp"];
$alg = $_REQUEST["corc"];

$sql = "INSERT INTO `corrections_exp1` (`entryID`,`accept_id`, `design_id`, `phrase_id`, `alg_corrections`, `manual_corrections`) VALUES ('$entryID','595765', '34' , '30948' , '$alg', '$backspace')";


if($conn->query($sql) === TRUE){echo "backspace corrections are : " .$backspace . " and algorithm corrections are: ".$alg;}

else{
    die("Addition Failed ".$conn->connect_error); //FIXME remove once working
}

$conn->close();

