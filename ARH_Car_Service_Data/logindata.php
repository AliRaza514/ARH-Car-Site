<?php

   $connection = mysqli_connect('localhost','root','','arh_db');

   if(isset($_POST['send'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $request = "Select email from users where email='".$email."' and password='".$password."'";
      $res=mysqli_query($connection, $request);
      $count=0;
      foreach($res as $row)
      {
         $count=$count+1;
      }
      echo $count;
      if($count==1)
      {
         header('location:ARH_site.html'); 
      }
      else
      {
         echo "Sign up required";
         header('location:signup.php'); 
      }


   }else{
      echo "something went wrong please try again!";
   }

?>