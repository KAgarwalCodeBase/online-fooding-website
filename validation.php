 <?php include"includes/db.php"?>
<?php
    if(isset($_POST['submit']))
    {
session_start();
global $connection;
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $query="select * from user where email='$email' && password='$pass' ";
        $result=mysqli_query($connection,$query);
       if(!$result)
    {
        echo "return query fails<br>";
         die("query failed".mysqli_error($connection));
    }
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['id'];
$_SESSION['email']=$email;
    
  if(!strcmp($row['email'],$email))
  {

        if(!strcmp($row['password'],$pass))
        {
                       
                       if($row['paid']==0)
                            {header('location:paylogin.php');}
                        else
                            {header('location:login.php');}
            }
        }
    }
?>