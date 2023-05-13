<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Student </title>
        <style>
      /* CSS styles go here */
      header{              
        top:0;
        left:0;
        background-color: bisque;
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
        background-color: #009879 ;
      }
      form {
        top: 7%;
        position:relative ;
        background-color: bisque;
        border: 1px solid #ccc;
        border-radius: 10PX;
        margin: 0 auto;
        max-width: 500px;
        padding: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type=text], input[type=date] {
        padding: 10px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      input[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
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
      <header>B A R
    </header>
        <?php
            $nameErr=$idErr=$mobilenoErr="";
            if($_SERVER['REQUEST_METHOD']=="POST"){
                if (empty($_POST["e_id"])) {  
                        $idErr = "ID is required ";  
                } else {  
                        $ide= input_data($_POST["e_id"]);  
                        if (!preg_match ("/^[0-9]*$/", $ide) ) {  
                        $idErr = "Only numeric value is allowed.";  
                        }   
                        if (strlen ($ide) >6) {  
                            $idErr = "id not exceed 6 digit.";  
                            }  
                }
                if (empty($_POST["e_mob"])) {  
                    $mobilenoErr = "Mobile no is required";  
                } else {  
                        $mobileno = input_data($_POST["e_mob"]);  
                        // check if mobile no is well-formed  
                        if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
                        $mobilenoErr = "Only numeric value is allowed.";  
                        }  
                    //check mobile no length should not be less and greator than 10  
                    if (strlen ($mobileno) != 10) {  
                        $mobilenoErr = "Mobile no must contain 10 digits.";  
                        }  
                }  
                $contact=input_data($_POST['e_mob']); 
            }
            function input_data($data) {  
                $data = trim($data);  
                $data = stripslashes($data);  
                $data = htmlspecialchars($data);  
                return $data; 
                }  
            ?>
        <form method="POST">
            <div>
            <label > First name :</label> <input type="text" id="f_name" name="f_name"   require><br>
            <label >Last Name :</label>         <input type="text" id="l_name" name="l_name" require><br>
            <label >Email : </label>         <input type="text" id="mail" name="mail" require><br>
            <label >Mobile Number : </label>         <input type="text" id="e_mob" name="e_mob" require><br>
            <label >Applying Date : </label>         <input type="date" id="dt" name="dt" require><br>
            <input type="submit" name="submit" style="margin-left: 40%; margin-top: 25px; ">
            </div>
        </form>
        <?php  
        if(isset($_POST['submit'])) {  
        if($mobilenoErr == "") {  
            echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
            require_once "createDB.php";

            if(!$sbh){
              die("Connection  not Succesfull ");
            }
            else{
                require_once "createDB.php";
                $sql ="INSERT INTO applicant(first_name, last_name, email, mobile, doa)
                VALUES
                (:fname,:lname,:email,:mobile,:doa)";
                $res=$sbh->prepare($sql);
                $res->bindParam(':fname',$_REQUEST['f_name']);
                $res->bindParam(':lname',$_REQUEST['l_name']);
                $res->bindParam(':email',$_REQUEST['mail']);
                $res->bindParam(':mobile',$_REQUEST['e_mob']);
                $res->bindParam(':doa',$_REQUEST['dt']);
                $res->execute();
                header('location:login_page.php');
            }

        } 
        }  
    ?> 
        
    </body>
</html>