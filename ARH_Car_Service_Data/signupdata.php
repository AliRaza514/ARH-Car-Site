<?php

   $connection = mysqli_connect('localhost','root','','arh_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
       if($name == '' || $email == '' || $password == '') {
         echo 'empty not entertained';
       }
       else {
         $request = "Insert into users(name, email, password) values('$name','$email','$password') ";
         mysqli_query($connection, $request);
         header('location:ARH_Login.html');
      }
      
   }else{
    header('location:ARH_signup.html');
      echo 'something went wrong please try again!';
   }

?>