<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <title>Form task </title> 
       <link rel = "stylesheet" href="css/profile.css">
       <link rel = "stylesheet" href="css/normalize.css">
    </head>
     <body> 
         <h1>YOur Profile</h1>
         <form> 
             <h2>Data Profile</h2>
             <div class="vote">  
                    <label>Title </label>
                    <h3> <?php echo $rowtitle["title"]; ?></h3>
            </div>
            <div class="vote">  
                    <label>UserName</label>
                    <h3><?php echo $admin ;?> </h3>
            </div>
            <div class="vote">  
                    <label>Full Name</label>
                    <h3> <?php echo $rowname["fullname"];?></h3>
            </div>
            <!--<div class="vote">
                    <label>Position </label>
                    <h3> knlnl;n;n;</h3>
            </div>-->
            <div class="vote">  
                    <label>Company </label>
                    <h3> <?php echo $rowcompany["company"];?></h3>
            </div>
            <div class="vote">  
                    <label>Email </label>
                    <h3> <?php echo $rowemail["email"];?></h3>
            </div>
            <div class="vote">  
                    <label>Street Adress </label>
                    <h3> <?php echo $rowstreet1["street1"];?></h3>
            </div>
            <div class="vote">  
                    <label>Alternative Address </label>
                    <h3> <?php echo $rowstreet2["street2"];?></h3>
            </div>
            <div class="vote">  
                    <label>Phone </label>
                    <h3><?php echo "0".$rowphone["phone"];?></h3>
            </div>
            <div class="vote">  
                    <label>Countery </label>
                    <h3> <?php echo $rowcountry["country"];?></h3>
            </div>
            <div class="vote">  
                    <label>City </label>
                    <h3> <?php echo $rowcity["city"];?></h3>
            </div>
            <div class="vote">  
                    <label>State/Region </label>
                    <h3> <?php echo $rowregion["region"];?></h3>
            </div>
            <div class="vote">  
                    <label> zip/Postal <code></code> </label>
                    <h3> <?php echo $rowzip["postalcode"];?></h3>
            </div>
         </form>
         <p> &copy; Course Registration Form . All Rights Reserved | Design by <span>ElmWaKis</span> </p>
              
     </body>

</html>