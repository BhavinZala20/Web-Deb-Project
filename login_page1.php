<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login Page</title>
    <link rel="stylesheet" href="style_home.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><ion-icon name="outline"></ion-icon> BAR</a>
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
        </div>

    <div class="wrapper-login">
        <h2>Login</h2>
        <form action="login_page.php" method="post">

            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
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
                <a href="reset_pass_page.php">Forget Password ?</a>
            </div>

            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Not a member ?<a href="signUp_page.php"> Sign Up now</a></p>
            </div>
            
        </form>
    </div>
    </section>

    <?php
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            // Connecting to the Database
            require_once "createDB.php";
            // Die if connection was not successful
            if (!$sbh)
            {
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else
            { 
            // Submit these to a database
            // Sql query to be executed 
            require_once "createDB.php";
            // require_once('dbConnect.php');
            $sql= "SELECT * FROM login_data WHERE email = '$email' AND password = '$pass' ";
            $res=$sbh->query($sql);
            $result=$res->execute();
            if(isset($result))
            {   
                require_once "createDB.php";
                $sql= "SELECT * FROM login_data WHERE email = '$email'";
                // $sbh->prepare($sql);
                $res=$sbh->query($sql);
                if($res->rowCount()>0)
                {
                    while($row=$res->fetch()){
                        if($row['username']=='admin')
                        {
                            header("location:index3.php");
                        }
                        else{
                            header("location:employee_event.php");
                        }
                        
                    }
                }
                else{
                    echo '<div class="w3-panel w3-green">
                    <h3>Success!</h3>
                    <p>Successfully Loged In</p>
                    </div>';
                    // header("location:employee_event.php");
                }
                    
                    
            }
            else
            {
                echo '<div class="alert" role="alert">
                      <strong>Sorry..! You Dont have Account Yet In this Site</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"></span>
                      </button>
                      </div>';
            }
        
        //   $sql = "INSERT INTO login_data VALUES ('$email', '$pass')";
        //   $result = mysqli_query($conn, $sql);
            }
        }
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>