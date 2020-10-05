<?php
    include './connection.php';
    if (isset($_POST['email'])) {
        //echo md5($_POST['password']);
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $query = 'SELECT email_user, passwd_user from tbl_user where email_user="'.$email.'" AND passwd_user="'.$password.'"';
        $result=mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            
        }
    } else {
        header('Location:../index.php');
    }
?>