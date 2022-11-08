<?php
@include'profile.php';
if(isset($_post['submit'])){
    $name=mysql_real_escape_string($conn, $_POST['name']);
    $email=mysql_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    $user_type=$_POST['user_type'];

     $select = "SELECT * FROM register_form WHERE email = '$email' && password ='$pass' ";
     $result = mysqli_query($conn, $select);
     if(mysqli_num_rows($result)>0){
        $error[]='user already exist!';
     }else{
        if($pass != $cpass){
            Serror[]='password not matched!';
        }
        else{
            $insert="INSERT INTO form(name, email, password,user_type) VALUES('$name','$email','$pass','$user_type')";
        }
     }

};