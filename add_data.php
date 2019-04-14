<?php
    include("connect.php");

      date_default_timezone_set('Asia/Kolkata');
     $dateS = date('m/d/Y h:i:s', time());
    echo $dateS;
    $SQL = "INSERT INTO greenhouse_weather1.data (date,temperature,humidity) VALUES ('$dateS','".$_GET["temp"]."','".$_GET["hum"]."','".$_GET["pr"]);     
    echo $dateS;
    $SQL = "INSERT INTO greenhouse_weather2.data (date,temperature,humidity) VALUES ('$dateS','".$_GET["temp"]."','".$_GET["hum"]."','".$_GET["pr"]); 
    
    mysql_query($SQL);


    header("Location: index.php");
?>