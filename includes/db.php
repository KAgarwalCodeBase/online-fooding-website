<?php
$connection=mysqli_connect("localhost",'root','','foodmauhalla');
if(!$connection)
    die("does not connect".mysqli_error());
else
    echo"connected succesfully";

?>












