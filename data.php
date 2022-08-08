<?php
    $insert = false;
 if(isset($_Post['Fullname'])){
      $server = "localhost";
      $username = "root";
      $password = " ";

     $con = mysqli_connect($server, $username, $password);

     if(!$con){
         die("Connection to this database failed" . mysqli_connect_error());
     }
        
       $Fullname =$_Post['Fullname'];
       $Email =$_Post['Email'];
       $Subject =$_Post['Subject'];
       $Message =$_Post['Message'];

         $sql = "INSERT INTO `contact_me`.`info` (`Full name`, `Email`, `Subject`, `Message`, `dt`) VALUES ( '$Fullname', '$Email', '$Subject', '$Message', curent_timestamp());";



          if($con ->query($sql)== true){

            echo "Succesfully inserted";
            $insert = true;
          }
          else{
              echo "Error: $sql <br> $con ->error";
             

          }

          $con ->close();

        }
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="style.css">
  <link rel = "icon" href ="Icons/contact.png"  type = "image/x-icon">
    <title>Contact</title>

</head>
<body>
<div class="zoomc">
    <ul>
        <li><a href="index.html" target="_self">Home</a></li>
        <li><a href="education.html" target="_self">Education</a></li>
        <li><a href="contact.html" target="_self"  class="selected">Contact</a></li>
        
      </ul>
<br>
<div class="mainc">
<video autoplay muted loop id="myVideo" width="1903px"  >
  <source src="Videos/contact1.mp4" type="video/mp4">
</video>

<div class="bottom">
 
  <h1 style="padding-top: 20px;"><u>Contact me</u>  </h1>
 
 <p>
   <b >Phone No. :- </b> 
   +91 9416874123
  
<br>
 <b>Email :- </b>
  kuldeepsaini02311@gmai.com
<br>

<b>Insta :- </b>
<a href="https://www.instagram.com/kuldeepsaini_23/" target="_blank">https://www.instagram.com/kuldeepsaini_23/</a>
<br>
<b>Linkedin :- </b>
<a href="https://www.linkedin.com/in/kuldeep-saini-31ab95220" target="_blank">https://www.linkedin.com/in/kuldeep-saini-31ab95220</a>
 </p>

</div>
</div>
   <form action="data.php" method="POST">
<div class="posi">
  <div class="container"> 
    <p>Contact me</p>
    <label for="Full name">Full name</label>
    <input type="text" class="input" id="Full name" name="Full name">
    <label for="Email">Email</label>
    <input type="text" class="input"  id="Email" name="Email">
</div>


<div class="subject">
<label for="Subject">Subject</label>
<input type="text" class="input"  id="Subject" name="Subject">
</div>

<div class="msg">
<textarea name="Message" class="area" placeholder="Leave your message"></textarea>
</div>
</div>
   

<div class="btn">
<button type="Send messagebutt">Send message</button></div>
</form>


</div>
</body>
</html>