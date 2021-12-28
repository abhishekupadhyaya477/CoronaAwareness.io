<?php

$server='localhost';
$user='root';
$password='';
$db='coviddb';
$con=mysqli_connect($server,$user,$password,$db);
if($con){
    ?>
    <script>
        alert("Connected");

    </script>
    <?php
}
else{
    ?>
    <script>
        alert(" Not Connected");

    </script>
    <?php
}

?>