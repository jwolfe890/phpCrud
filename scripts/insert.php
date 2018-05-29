<?php

   global $connection; 

   header("Location: http://www.google.com");
    die();


   $f_name = $l_name = $email = $password = "";

   if(isset($_POST['submit'])){
       $firstname = $_POST['firstname']; 
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $pass_word = $_POST['password']; 

       $sql_query = mysqli_query($connection, "SELECT * FROM signup WHERE email = '{$email}' ");
       $count = mysqli_num_rows($sql_query);

      if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($pass_word)) {

        if($count > 0){
            $error1 = "<div class='alert alert-danger' role='alert'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            User with email already exists!</div>";
        }else {
            
            $f_name = mysqli_real_escape_string($connection, $firstname);
            $l_name = mysqli_real_escape_string($connection, $lastname);
            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $error2 = "<div class='alert alert-danger' role='alert'>Email is invalid</div>";
            }

            if(!preg_match("/^[a-zA-Z]*$/", $f_name)) {
                $error3 = "<div class='alert alert-danger' role='alert'>Only letters are allowed for first name</div>";
            }

            if(!preg_match("/^[a-zA-Z]*$/", $l_name)) {
                $error3 = "<div class='alert alert-danger' role='alert'>Only letters are allowed for last name</div>";
            }

        }

      }
    }

?> 