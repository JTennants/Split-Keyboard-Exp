<?php
  session_start();
  $_SESSION["accept_id"] = null;
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consent Form</title>
    <style>
        *{
            font-family: Arial;
        }
        ul{
            list-style-type: square;
        }
        #agreement{
            padding-left: 50%
        }
        button{
            background-color:#008CBA ;
            color: #ffffff;
            text-align: center;
            border: none;
            padding: 3%;
        }
    </style>

</head>
<body>
<h1>
    Consent Form for Peripheral Tablet Keyboard User Experiment
</h1>



<ul>
    <li>I confirm that I have read and understood the Participant Information Sheet for the above project and the researcher has answered any queries to my satisfaction. </li>
    <li> I confirm that I have read and understood the Privacy Notice for Participants in Research Projects and understand how my personal information will be used and what will happen to it (i.e. how it will be stored and for how long).</li>
    <li>   I understand that my participation is voluntary and that I am free to withdraw from the project at any time, up to the point of completion, without having to give a reason and without any consequences.</li>
    <li>   I understand that anonymised data (i.e. data that do not identify me personally) cannot be withdrawn once they have been included in the study.</li>
    <li>   I understand that no information that identifies me will be made publicly available.</li>
    <li>   I consent to being a participant in the project.</li>
</ul>
<p id = "agreement">
    <button onClick="assignID()">I Agree</button>

    <script>
        function assignID(){
          <?php $_SESSION["accept_id"] = rand(0,10000); ?>

            window.location.href ="practice.php";
        };

    </script>


</p>
</body>
</html>