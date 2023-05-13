<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Company - Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        #login-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #ccc;
        }
        
        #login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        
        p.company-info {
            text-align: left;
            font-size: 14px;
            color: #999;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 5px #ccc;
            margin-bottom: 20px;
        }
        
        #navbar {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            align-items: center;
        }
        
        #navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }
        
        #navbar a:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <h2>Software Company Name</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#">Details</a>
            <a href="#">Apply for Job</a>
            <a href="#">Login</a>
        </nav>
    </div>
    
    <div id="login-form">
        <h2>Login to Your Account</h2>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
    </div>
    
    <div id="company-details">
        <p class="company-info">Software Company Name specializes in supplying software solutions to businesses of all sizes. Contact us today to see how we can help your business succeed.</p>
    </div>
</body>
</html>
