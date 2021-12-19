#!/usr/bin/perl

use CGI ':standard';
print "Content-type: text/html\n\n";

$firstname = param ('firstName');
$lastname = param ('lastName');
$street = param ('street');
$city = param ('city');
$postalcode = param ('postalCode');
$province = param ('province');
$gender = param ('gender');
$phonenumber = param ('phoneNumber');
$email = param ('email');
$password = param ('password');


print "<div style=width:300px;height:300px;background-color:red;position:absolute;top:100px;left:100px;float:left;color:white>";
print "<div style=font-size:35px> Personal Information </div>";
    print "<p style=font-size:20px;margin-left:20px>" ;
      print "First Name: $firstname <br> <br>";
      print "Last Name: $lastname <br> <br>";
      print "Gender: $gender <br> <br>";   
    print    "</p>";
print "</div> ";



print "<div style=width:300px;height:300px;background-color:blue;position:absolute;top:100px;left:450px;float:left;color:white>";
print "<div style=font-size:35px;text-align:center>  Address </div>";
   print "<p style=font-size:20px;margin-left:20px>" ;
    print "Street: $street <br> <br>";
    print "City: $city <br> <br>";
    if(length $postalcode!=6){
     print "<span style='font-weight:bold;color:yellow;font-size:25px'>Postal Code Must Be 6 Digits <br> <br></span>";
    }
    else{
    print "Postal Code: $postalcode <br> <br>";
    }
    print "Province: $province <br> <br>";
   print    "</p>";
print "</div> ";


print "<div style=width:300px;height:300px;background-color:green;position:absolute;top:100px;left:780px;float:left;color:white>";
print "<div style=font-size:35px;text-align:center> Contact Details </div>";
  print "<p style=font-size:20px;margin-left:20px>" ;
    if (length $phonenumber!=10){
     print "<span style='font-weight:bold;color:yellow;font-size:25px'>Phone Number Must Be 10 Digits <br> <br></span>";
    }
    elsif($phonenumber=~/^[0-9]+$/){
     print "Phone Number: $phonenumber <br> <br>";
    }  
    else{
     print "<span style='font-weight:bold;color:yellow;font-size:25px'>Phone Number Must Be Numeric <br> <br> </span>";
    }

    if($email=~ /([a-zA-Z]+)\@([a-zA-Z]+)\.(com|net|org|ca)/){
     print "Email: $email <br> <br>";
    }
    else{
     print "<span style='font-weight:bold;color:yellow;font-size:25px'> Invalid Email Format <br> <br> </span>";
    }
    print "Password: $password <br> <br>";
  print    "</p>";
print "</div> ";
