<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="reset_pass_style.css">
</head>
<body>
    <div class="login-box">
        <h2>Reset password</h2>
        <form action="pass_reset_code.php" method="post">
            <div class="user-box">
                <input type="email" name="email" class="form-control" id="email" required="" aria-describedby="emailHelp">
                <label for="exampleInputEmail1">Email</label>
            </div>
            
            <!-- <div class="user-box">
                <input type="password" name="" id="" required="">
                <label for="">New Password</label>
            </div>

            <div class="user-box">
                <input type="password" name="password-reset-token" class="btn btn-primary" id="" required="">
                <label for="">Confirm Password</label>
            </div> -->
                <a href="pass_reset_code.php" name="password_reset_code">
                Send Password Reset Link
                </a>
        </form>          
</body>
</html>

