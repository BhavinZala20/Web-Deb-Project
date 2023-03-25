<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login Page</title>
    <link rel="stylesheet" href="style_signUp.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><ion-icon name="cafe-outline"></ion-icon> coffee</a>
        <nav class="nav">
            <a href="login_page.php">Home</a>
        </nav>
    </header>

    <section class="home">
    <div class="wrapper-signUp">
        <h2>Sign Up</h2>
        <form action="signUp_page.php" method="post">

            <div class="input-box">
                <span class="icon"><ion-icon name="people"></ion-icon></span>
                <input type="text" required name="name" class="form-control" id="name">
                <label>Username</label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required name="email" class="form-control" id="email">
                <label>Email</label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required name="pass" class="form-control" id="pass">
                <label>Password</label>
            </div>

            <button type="submit" class="btn"><a onclick="login_page.php">Register</a></button>
            <div class="register-link">
            </div>
        </form>
    </div>
    </section>

<?php

    try
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $uname = $_POST['uname'];
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
                $sql = "INSERT INTO signup_data VALUES ('$uname', '$email', '$pass')";
                $result = mysqli_query($conn, $sql);

                if($result)
                {
                    echo "Successfully Registered";
                }
            }
        }

    }

    catch(exception $e)
    {
        
    }
?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>