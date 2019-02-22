
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>Form task </title> 
       <link rel = "stylesheet" href="css/style.css">
       <link rel = "stylesheet" href="css/normalize.css">
        <style>
            .errormess{
                color:red;
                font-size:10px;
                padding: 0;
                margin: 0;
                display:block;
            }
        </style>
    </head>
    <body>
        <div class="form">
                <h1>  RESIGTRATION FORM </h1>

            <form id="task" method="post" action="<?php  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2>Sign In</h2>
                <input type="text" placeholder="Title" name="title" required>
                <input type="text" placeholder="Username" name="username" required>
                <span class="errormess"><?php echo $usernameerr?></span>
                <input type="text" placeholder="Full name" name="name"  required>
                <span class="errormess"><?php echo $nameerr?></span>
                <input type="password" placeholder="password" name="password" required>
                <span class="errormess"><?php echo $passworderr?></span>
                <input type="text" placeholder="Company" name="company"  required>
                <span class="errormess"><?php echo $companyerr?></span>
                <input type="text" placeholder="Email" name="email"  required>
                <span class="errormess"><?php echo $emailerr?></span>
                <input type="text" placeholder="Street Address " name="street1"  required>
                <span class="errormess"><?php echo $street1err?></span>
                <input type="text" placeholder="Alternative Address" name="street2"  required>
                <span class="errormess"><?php echo $street2err?></span>
                <input type="text" placeholder="Phone Number" name="phone"  required>
                <span class="errormess"><?php echo $phoneerr?></span>
                <div class="log">
                    <select  name="country" required>
                        <option value=""> choose your country</option>
                        <option value="EGY"> Egypt</option>
                        <option value="France"> France</option>
                        <option value="England">England</option>
                        <option value="usa"> Amireca</option>
                        <option value="bra"> Brazil</option>
                    </select>
                    <input type="text" placeholder="City"required name="city">
                    <span class="errormess"><?php echo $cityerr?></span>
                    <br>
                    <input type="text" placeholder="Region"required name="region">
                    <input type="text" placeholder="Zip/postal code" required name="zip">
                    <span class="errormess"><?php echo $regionerr?></span>
                    <span class="errormess"><?php echo $ziperr?></span>
                </div>
                <br>
                <button type="submit" name="submit" id="button"> Submit</button>

            </form>
          <p> &copy; Course Registration Form . All Rights Reserved | Design by <span>ElmWaKis</span> </p>
          </div>
          
          <div class="good">
                <h1> " Welcome to our community " <br><Span class="ieee"> " IEEE "</Span> 
                </h1>
                <img src="image/FB_IMG_1542618135468.jpg" width="300px" height="245px">
            </div>
          
    </body>
</html>