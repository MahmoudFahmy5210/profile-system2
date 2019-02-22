<?php
session_start();
require'../ConnDB.php';
$title=$name=$phone=$country=$city=$email=$street1=$street2=$zip=$username=$password=$company=$region="";
$usernameerr=$nameerr=$phoneerr=$cityerr=$emailerr=$ziperr=$passworderr=$street1err=$street2err=$companyerr=$regionerr="";
if(isset($_POST['submit']))
{
    //echo"submitted";
    $title=test_input($_POST['title']);//no validation
    $username=test_input($_POST['username']);
    $name=test_input($_POST['name']);
    $password=test_input($_POST['password']);
    $company=test_input($_POST['company']);
    $email=test_input($_POST['email']);
    $street1=test_input($_POST['street1']);
    $street2=test_input($_POST['street2']);
    $country=test_input($_POST['country']);
    $phone=test_input($_POST['phone']);
    $city=test_input($_POST['city']);
    $region=test_input($_POST['region']);
    $zip=test_input($_POST['zip']);
    $acceptN=$acceptP=$acceptE=$acceptS1=$acceptS2=$acceptPh=$acceptCom=$acceptCI=$acceptR=$acceptZip=$acceptU=false;
    //________________________________________________________Username Validation_______________________________________
    if (!preg_match("/^[a-z\d_]{5,20}$/i" , $username )){
        $usernameerr="Used Letters followed by numbers , you can use _ character";
    }
    else{
        $query1= mysqli_query($connDb, "SELECT * FROM users WHERE username LIKE'$username'")or die(mysqli_error($connDb));
        if(mysqli_num_rows($query1) == true) {
            $usernameerr = "This username is found , please choose another username";
            $acceptU = false;
        }
        else{
            $acceptU=true;
        }
    }
    //________________________________________________________Fullname Validation_______________________________________
    if(!preg_match("/^[a-zA-Z ]*$/", $name))
    {
        $nameerr="*Name must contain letters and whitespace only ";
        $acceptN=false;
    }
    else
    {
        $acceptN=true;
    }
    //________________________________________________________Password Validation_______________________________________
    if(!preg_match("/^[a-zA-Z0-9]\w{7,15}$/",$password))
    {
        $passworderr="*Weak password , use letters,numbers and underscore range between 7 and 15 characher ";
        $acceptP=false;
    }
    else
    {
        $acceptP=true;
    }
    //________________________________________________________Email Validation__________________________________________
   /* if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,10}$/",$email))
    {
        $emailerr="*example@gmail.com";
    }
    else {
        $acceptE=true;
    }*/
   if(!filter_var($email,FILTER_VALIDATE_EMAILL)===false){
       $emailerr="*mahmoud.samir@example.com";
   }
   else{
       $query1= mysqli_query($connDb, "SELECT * FROM users WHERE email LIKE'$email'")or die(mysqli_error($connDb));
       if(mysqli_num_rows($query1) == true) {
           $emailerr = "This email is found , please choose another email";
           $acceptE = false;
       }
       else{
       $acceptE=true;
       }
   }
    //________________________________________________________Streets Validation_______________________________________
    if(!preg_match("/^[A-Za-z0-9]+/",$street1))
    {
        $street1err="*Invalid street name use letters and numbers only";
    }
    else{
        $acceptS1=true;
    }
    if(!preg_match("/^[A-Za-z0-9]+/",$street2))
    {
        $street2err="*Invalid street name use letters and numbers only";
    }
    else{
        $acceptS2=true;
    }
    //________________________________________________________Phone Validation__________________________________________
    if (!preg_match("/^(010|011|015|012)[0-9]{8}$/",$phone))
    {
        $phoneerr="*Phone must be 11 number start with 012 or 011 or 010 or 015";
    }
    else{
        $acceptPh=true;
    }
    //________________________________________________________Company Validation________________________________________
        if(!preg_match("/^[A-Za-z ]*$/",$company))
    {
        $companyerr="*Invalid company name use letter and whitespace only";
    }
    else{
        $acceptCom=true;
    }
    //________________________________________________________City Validation___________________________________________
    if (!preg_match("/^[a-zA-Z ]*$/", $city))
    {
        $cityerr="*City must contain letter and whitespace only ";
    }
    else{
        $acceptCI=true;
    }
    //________________________________________________________Region Validation_________________________________________
    if (!preg_match("/^[A-Za-z0-9 ]+/",$region))
    {
        $regionerr="*Region name contain letters and numbers";
    }
    else{
        $acceptR=true;
    }
    //________________________________________________________Postal code Validation____________________________________
    if (!preg_match("/^[0-9]{5}$/",$zip)) {
        $ziperr="*Postal zip code must contain 5 number";
    }
    else{
        $acceptZip=true;
    }
    //________________________________________________________(Sent Data To Database)___________________________________
    $accepteness=array($acceptN,$acceptP,$acceptE,$acceptS1,$acceptS2,$acceptPh,$acceptCom,$acceptCI,$acceptR,$acceptZip,$acceptU);
    $error=false;
    foreach ($accepteness as $val){
        if (!$val==true){
            $error=true;
            break;
        }
    }
    if($error==false)
    {
        $_SESSION['ADMIN']=$username;
        $sql="INSERT INTO users(fullname,username,email,password,phone,title,company,street1,street2,country,region,city,postalcode) VALUE ('$name','$username','$email','$password','$phone','$title','$company','$street1','$street2','$country','$region','$city','$zip')";
        mysqli_query($connDb, $sql)or die(mysqli_error($connDb));
        header("Location: ../profileBack.php");
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
mysqli_close($connDb);
require 'signup.php';
?>