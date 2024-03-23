<?php session_start(); 

if(isset($_POST['submit'])){

  include('inc_files/portfoliodata.php');     

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$message = mysqli_real_escape_string($conn, $_POST['message']);



if($name !="" && $email != "" && $phone != "" && $message != ""){

            date_default_timezone_set('Africa/Lagos');
            $udate = date("d/m/Y");
            $hr = date("h");
            $utime = date($hr.":m:s");

      //include email function
      //include("contactmail.php");
      include("contactmail2.php");
         
  $input = mysqli_query($conn, "INSERT INTO `contact_form` (`name`, `email`, `phone`, `message`, `date`) VALUES ('$name', '$email', '$phone', '$message', '$udate')");
     ?>                       
     <script>
          alert('message sent successfully. I will get back to you where necessary. Thank you');
              window.location.href='index?success';
          </script>
          <?php
        }
        else{
                $_SESSION['error'] = "<i class='bi-hand-thumbs-down'></i> Your message was not success. Please try again. ";
            }

            //header('location:services');
            echo "<script> window.location.href='index.php'; </script> ";

} 
    //mysql_close ($conn);                  
      ?>

