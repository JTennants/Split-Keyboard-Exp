<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julia
 * Date: 07/03/2020
 * Time: 17:02
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no"/>

    <title>Title</title>
</head>
<body>


<canvas id="myCanvas" width="980px" height="594px" style="border:1px solid #d3d3d3;"> </canvas>
<script>
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.strokeStyle = "red";
    ctx.lineWidth = "1";
    ctx.rect(8, 418.359, 965, 148);
    ctx.stroke();

    function drawPoints(x,y){
        ctx.beginPath();
        ctx.lineWidth = "0.5px";
        ctx.strokeStyle = "green";
        ctx.rect(x, y, 2, 2);
        ctx.stroke();
    }


</script>

    <?php
    $host = "devweb2019.cis.strath.ac.uk";
    $user = "rnb16141";
    $pass = "eimahQuai4Vo";
    $dbname = "rnb16141";
    $db = new mysqli($host, $user, $pass, $dbname);

    if ($db->connect_error)
    {
        die("Connection failed : ".$db->connect_error); // Remove once working!!!
    }

    $sql = "SELECT `touch_location_x`, `touch_location_y` FROM `experiment1` WHERE `design_id`='3'";



    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Filling the table
        while ($row = $result->fetch_assoc()) {
            $x = $row["touch_location_x"];
            $y = $row["touch_location_y"];
        echo "<script type='text/javascript'>drawPoints(".$x.", ".$y.");</script>";

        }
    }
    ?>

</body>
</html>