<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student </title>
        <style>
      /* CSS styles go here */
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
      }
      form {
        background-color: #fff;
        border: 1px solid #ccc;
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
        <?php
            $nameErr=$idErr=$mobilenoErr="";
            if($_SERVER['REQUEST_METHOD']=="POST"){
                if (empty($_POST["e_name"])) {  
                    $nameErr = "Name is required";  
                } else {  
                    $name = input_data($_POST["e_name"]);  
                        // check if name only contains letters and whitespace  
                        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                            $nameErr = "Only alphabets and white space are allowed";  
                        }  
                }
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
                $addr=input_data($_POST['e_add']); 
                $dob=input_data($_POST['e_dob']); 
                $doj=input_data($_POST['e_doj']);
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
            <label > ID :</label> <input type="text" id="e_id" name="e_id"   require><br>
            
            <label >Name :</label>            <input type="text" id="e_name" name="e_name" require><br>

            <label >Address :</label>         <input type="text" id="e_add" name="e_add" require><br>
            <label >Contact : </label>         <input type="text" id="e_mob" name="e_mob" require><br>
            <label >DOB :</label>             <input type="date" id="e_dob" name="e_dob" require><br>
            <label >Joining Date :</label>    <input  type="date" id="e_doj" name="e_doj" require><br>
            <input type="submit" name="submit" style="margin-left: 40%; margin-top: 25px; ">
            </div>
        </form>
        <?php  
        if(isset($_POST['submit'])) {  
        if($nameErr == "" &&  $idErr == "" && $mobilenoErr=="") {  
            echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
            require_once "createDB.php";

            if(!$sbh){
              die("Connection  not Succesfull ");
            }
            else{
                require_once "createDB.php";
                $sql =" INSERT INTO companymangement.Employee (emp_no, emp_name, emp_add, mobile, dob, doj)
                VALUES
                (:eid,:ename,:eaddr,:econct,:edob,:edoj)";
                $res=$sbh->prepare($sql);
                $res->bindParam(':eid',$_REQUEST['e_id']);
                $res->bindParam(':ename',$_REQUEST['e_name']);
                $res->bindParam(':eaddr',$_REQUEST['e_add']);
                $res->bindParam(':econct',$_REQUEST['e_mob']);
                $res->bindParam(':edob',$_REQUEST['e_dob']);
                $res->bindParam(':edoj',$_REQUEST['e_doj']);
                $res->execute();
                header('location:index1.php?msg= Employee Added');
            }
        } else {  
            echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
        }  
        }  
    ?> 
        
    </body>
</html>