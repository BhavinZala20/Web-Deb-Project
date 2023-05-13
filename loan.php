<html>
    <head>
        <title>Employee Loan Request</title>
        <style>
            header{              
                top:0;
                left:0;
                background-color: #009879;
                font-size: 1.61rem;
                
                font-weight: 800;
                color:black;
                font-family:'Times New Roman', Times, serif;
                padding: 13px 10%;
                /* background-color: darkgrey; */
                border-radius: 5px;
                text-shadow: 5px;
                border-color: black;
                border-style: solid;
            }
            body {
                font-family: Arial, sans-serif;
                background-color: bisque;
                font-family: 'Times New Roman';
                font-size: x-large;
            }
            h2 {

                text-align: center;
                color: black;
            }
            form {
                color:white;
                background-color: #009879;
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px black;
            }
            label {
                
                display: block;
                font-size: large;
                margin-bottom: 10px;
                /* font-weight: bold; */
                color: #fff;
            }
            input[type="email"],
            input[type="tel"],
            input[type="text"],
            input[type="number"],
            input[type=date] {
                padding: 10px;
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-bottom: 20px;
                box-sizing: border-box;
            }
            input[type=submit] {
                margin-top: 20px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0px 0px 10px black;
                
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            .error {
                color: red;
                font-size: 14px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            B A R
        </header>
        <h2>Employee Loan Request Form</h2>
        
        <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $id = $_POST['id'];
                $amount = $_POST['amount'];
                $reason = $_POST['reason'];

                // Process the loan request here
                // ...

                echo "<h4>Loan request submitted successfully.</h4>";
            }
        ?>
        <form method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mobile">Mobile No:</label>
            <input type="tel" id="mobile" name="mobile" required>

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="amount">Loan Amount:</label>
            <input type="number" id="amount" name="amount" min="1" required>

            <label for="reason">Reason for Loan:</label>
            <textarea id="reason" name="reason" required></textarea>
            <center><input type="submit" name="submit" value="Submit"></center>
            
        </form>
    </body>
</html>
