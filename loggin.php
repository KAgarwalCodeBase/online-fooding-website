<?php
   session_start();
  unset($_SESSION['email']);
   session_destroy();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Payment</title>
    <link rel="stylesheet" type="text/css" href="venders/css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
    body
    {
         margin-top:75px;
       margin-left: 32%;
        margin-right: 32%;
    }
    .heading
    {
        color:white;
        font-size:200%;
        font-weight:500;  
        padding:25px;
        background-color: #e67e22;
        width:476px;
        margin-bottom:50px;
        border-radius: 25px 25px 0 0;
        text-align: center;
    }
    
    .field{ 
        width:400px;
    }
    .main{border-radius: 25px 25px 25px 25px;
        border: 1px solid  #e67e22;
        padding:0%;
    }
    .main1{
        
         padding:10%;
    }
    </style>
    </head>
    <body>
    <div class="main">
       <div class="heading">
        Login in     
        </div>
              <div class="main1">
              
            <form action="validation.php" method="post" onsubmit="return checklogin(this);">
             
                <div class="form-group field ">
                 <input type="text"class="form-control input-lg"  placeholder="Email" name="email" required></div>
                 <br><div class="form-group field">
         <input type="password"class="form-control input-lg " name="password"  placeholder="Password" required>
               </div><br>
               
               <div class="form-group field">
           <input type="submit" class="field "value="submit" style="  background-color: #e67e22;border-radius: 15px 15px 15px 15px;
        border: 1px solid  #e67e22;line-height:35px;" name="submit" > </div>
           </form>
        </div>
    </div>
    </body>
</html>