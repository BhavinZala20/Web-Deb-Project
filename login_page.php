<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><ion-icon name="cafe-outline"></ion-icon> coffee</a>
        <nav class="nav">
            <a href="login_page.php">Home</a>
            <a href="#">About</a>
            <a href="#">Menu</a>
            <a href="#">Reviews</a>
            <a href="#">Contact</a>
            <a href="#">Hello There</a>
        </nav>
    </header>

    <section class="home">
        <div class="content">
            <h2>Coffee Build Your Mind</h2>
            <p>Coffee in my hand, Code on my screen, Together they help my mind expand.</p>
                <a href="#">Get Started</a>
        </div>

    <div class="wrapper-login">
        <h2>Login</h2>
        <form action="login_page.php" method="post">

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="email" required name="email" class="form-control" id="email">
                <label>Enter your email</label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" required name="pass" class="form-control" id="pass">
                <label>Enter your password</label>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password ?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Not a member ?<a href="#">Sign Up now</a></p>
            </div>
        </form>
    </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "h@numan20";
        $database = "login_info";
        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn)
        {
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else
        { 
          // Submit these to a database
          // Sql query to be executed 
          $sql = "INSERT INTO login_data VALUES ('$email', '$pass')";
          $result = mysqli_query($conn, $sql);
  
          if($result)
          {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Your entry has been submitted successfully!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"></span>
                  </button>
                  </div>';
          }
          else
          {
              // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                    </button>
                    </div>';
          }
        }
    }
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>