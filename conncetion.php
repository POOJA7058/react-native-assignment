<?php

$username = "";
$email    = "";
$psw      ="";
$confo_psw="";
$first_name="";
$last_name="";
$gender="";
$dob="";
$country="";
$address="";
$tel="";
$word="";
$hobbies="";
$think="";


$id = 0;

//connect to database

$db =mysqli_connect('localhost','root','','Register');


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {

echo "connection ok";
}
 




//if save button is clicked
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$confo_psw = $_POST['confo_psw'];
$first_name = $_POST['first_name'];
$last_name= $_POST['last_name'];
$gender = $_POST['gender'];
$dob= $_POST['dob'];
$country = $_POST['country'];
$address= $_POST['address'];
$tel = $_POST['tel'];
$word= $_POST['word'];
$hobbies= $_POST['hobbies'];
//$skills= implode(',', $_POST['skills']);
$think= $_POST['think'];



$query = "INSERT INTO user (username, email, psw,confo_psw,first_name,last_name,gender,dob,country,address,tel,word,hobbies,think) 
  			  VALUES('$username', '$email', '$psw','$confo_psw','$first_name','$last_name','$gender','$dob','$country','$address','$tel','$word','$hobbies','$think')";
if ($db->query($query) === TRUE) {
   echo "New record created successfully";
} else {
   echo "Error: " . $query . "<br>" . $db->error;
}
mysqli_query($db,$query);
//header('location: index.php'); //redirect to index page after inserting
}

/* session_start();
$username="";
$email="";

$db=mysqli_connect('localhost','root','','registration');

 if(isset($_POST['submit'])){
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$query="INSERT INTO users(name,email) VALUES('$username','$email')";
 	mysqli_query($db,$query);
 	header('Location:index.php');

 }*/
?>


