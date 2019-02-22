<!DOCTYPE HTML>
<html>
    
    <head>
       <meta charset="utf-8">
       <title>Login </title> 
       <link rel = "stylesheet" href="css/style.css">
       <link rel = "stylesheet" href="css/normalize.css">
        <style>
            .errmess{
                color:#db3434;
                font-size:15px;
                padding: 0;
                margin: 0;
                display:block;
            }
        </style>
    </head>
    <body> 
      <div class="Sign"  > <a href="Task 1/signupBack.php" target="_blank"> Sign Up</a> </div>
      <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <h1> Login </h1>
         <input type="text" placeholder="username" name="username" class="text" required>
         <input type="password" placeholder="password" name="password" class="pass" required>
          <input type="submit" class="login" value="login" name="submit">
          <span class="errmess"><?php echo $error ;?></span>
        </form>
        <p> &copy; Course Registration Form . All Rights Reserved | Design by <span>ElmWaKis</span> </p>
    </body>

</html>