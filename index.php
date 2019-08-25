<?php include('conncetion.php'); ?>
<!DOCTYPE html>
<html>
   <head> 
       <title>Register</title>
   </head>  
    <body background="img.png">
       <form action="conncetion.php" method="post">
       <div class="container">
      <center>
      <h2>Registration Form</h2>
      </center>
  
    <br><hr><br><br>
        <label for="Username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username"  required  style="padding: 8px;width: 200px;     border: #A3C3E7 1px solid; border-radius: 4px";><br><br><br>

      <label for="Email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required><br><br><br>

   <label for="psw"><b>psw</b></label>
      <input type="Password" placeholder="Enter Password" name="psw" required><br><br><br>

       <label for="Conform Password"><b>Conform Password</b></label>
      <input type="Password" placeholder="Conform Password" name="confo_psw" required><br><br><br><hr>

      <h2>Personal Details</h2>

       <label for="First Name"><b>First Name</b></label>
      <input type="First Name" placeholder="Enter Frist Name" name="first_name" required><br><br><br>

       <label for="Last Name"><b>Last Name</b></label>
      <input type="Last Name" placeholder="Enter Last Name" name="last_name" required><br><br>

      <h3>Gender</h3>
     <form action="">
       <input type="radio" name="gender" value="male"> Male<br><br>
       <input type="radio" name="gender" value="female"> Female<br><br><br>
     </form>

      <label for="DOB"><b>DOB</b></label>
      <input type="Date" placeholder="Enter your date of birth" name="dob" required><br><br>

      <label for="Country"><b>Country</b></label>
      <input type="country" placeholder="Enter your country" name="country" required><br><br>

      <label for="Enter your Address"><b>address</b></label>
      <textarea name="address"></textarea>

      <label for="Phone-number"><b>phone-number</b></label>
      <input id="phone" type="tel" size="10" name="tel">

      <label for="ONE word"><b> Describe you in ONE word..!!</b></label>
      <textarea placeholder="word....!!" name="word"></textarea><br><br>

      <label for="Hobbies"><b>Hobbies</b></label>
      <input type="Hobbies" placeholder="Enter your Hobbies" name="hobbies" required><br><br>
       
<!--<label for ="skills" name="skills"></label>
  <input type="checkbox" name="skills" value="c_Programming">C Programming<br>
  <input type="checkbox" name="skills" value="Html">Html<br>
   <input type="checkbox" name="skills" value="Python"> Python<br>
    <input type="checkbox" name="skills" value="Java_script">Java script<br>
  <input type="checkbox" name="skills" value="css" checked> CSS<br><br>-->

     <label for="think"><b>What you think about PROGRAMMER..</b></label>
      <input type=think placeholder="What in your mind..!" name="think" required><br><br><br>
       <center>
          <input type="submit"  name="submit" value="submit" style=" background: #992600;
          border: 0; padding: 8px 40px;border-radius: 6px;color: #FFF; text-transform: uppercase;">
         </center> 

       
    </div>
  </form>
 </body>
</html>
