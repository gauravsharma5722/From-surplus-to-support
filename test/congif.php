<?php
$con=mysqli_connect("localhost","root"," ","acc");

if(isset($con))
{
    echo"connection succesfull";
}
else{
    echo"not";
}
?>