<?php

function addUser()
{
    echo "ajlfhfldsafnlsfs";
    global $connection;
   if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pwd1=$_POST['pwd1'];
        $comment=$_POST['comment'];
        $price=$_POST['amount_1'];
        $plan=$_POST['item_name_1'];
        $source=$_POST['source'];
        
     
        $query="select * from user where email='$email'";
        $result=mysqli_query($connection,$query);
        $num=mysqli_num_rows($result);
        if($num>0)
        { 
          
         
        }
        else
        {
                $query="insert into user(name,email,password,plan,price,source,comment)";
                $query.=" values('{$name}','{$email}','{$pwd1}','{$plan}','{$price}','{$source}','{$comment}')";
                $result=mysqli_query($connection,$query);
                if(!$result)
                    die("query failed".mysqli_error($connection));
                else
                    echo "query sussesfully executed ";
                header('location:loggin.php');
            
        }
        
    }
    else
    {
        echo "query dose not execute";
    }
    
}



?>
