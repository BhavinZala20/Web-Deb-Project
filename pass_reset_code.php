<?php

include('dbconfig.php'); 

if(isset($_POST['password_reset_code']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM login_data WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {

    }
    else
    {
        $_SESSION['status'] = 'No Email Found';
        header("Location: reset_pass_page.php");
        exit(0);
    }
}

?>