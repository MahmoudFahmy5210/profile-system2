<?php
session_start();
include 'ConnDB.php';
$admin=$_SESSION['ADMIN'];
$titleData= mysqli_query($connDb, "SELECT title FROM users WHERE username ='$admin'") or die("Error: " . mysqli_error($connDb));
$rowtitle=mysqli_fetch_assoc($titleData);
//username
$fullnameData= mysqli_query($connDb, "SELECT fullname FROM users WHERE username ='$admin'")  or die("Error: " . mysqli_error($connDb));
$rowname=mysqli_fetch_assoc($fullnameData);
$companyData= mysqli_query($connDb, "SELECT company FROM users WHERE username ='$admin'")    or die("Error: " . mysqli_error($connDb));
$rowcompany=mysqli_fetch_assoc($companyData);
$emailData= mysqli_query($connDb, "SELECT email FROM users WHERE username ='$admin'")        or die("Error: " . mysqli_error($connDb));
$rowemail=mysqli_fetch_assoc($emailData);
$street1Data= mysqli_query($connDb, "SELECT street1 FROM users WHERE username ='$admin'")    or die("Error: " . mysqli_error($connDb));
$rowstreet1=mysqli_fetch_assoc($street1Data);
$street2Data= mysqli_query($connDb, "SELECT street2 FROM users WHERE username ='$admin'")    or die("Error: " . mysqli_error($connDb));
$rowstreet2=mysqli_fetch_assoc($street2Data);
$phoneData= mysqli_query($connDb, "SELECT phone FROM users WHERE username ='$admin'")        or die("Error: " . mysqli_error($connDb));
$rowphone=mysqli_fetch_assoc($phoneData);
$countryData= mysqli_query($connDb, "SELECT country FROM users WHERE username ='$admin'")    or die("Error: " . mysqli_error($connDb));
$rowcountry=mysqli_fetch_assoc($countryData);
$cityData= mysqli_query($connDb, "SELECT city FROM users WHERE username ='$admin'")          or die("Error: " . mysqli_error($connDb));
$rowcity=mysqli_fetch_assoc($cityData);
$regionData= mysqli_query($connDb, "SELECT region FROM users WHERE username ='$admin'")      or die("Error: " . mysqli_error($connDb));
$rowregion=mysqli_fetch_assoc($regionData);
$zipData= mysqli_query($connDb, "SELECT postalcode FROM users WHERE username ='$admin'")     or die("Error: " . mysqli_error($connDb));
$rowzip=mysqli_fetch_assoc($zipData);
require 'profile.php';
?>