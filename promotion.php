<!DOCTYPE html>
<html>
<head>
	<title>Promotion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
        text-align: center;
        color: #333;
        }

        form {
        width: 50%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 2px 2px 5px #ccc;
        }

        label {
        display: block;
        margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
        }

        input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
        }

        input[type="submit"]:hover {
        background-color: #45a049;
        }

    </style>
</head>
<body>
	<h1>Promote Employee</h1>
	<form  method="POST">
		<label for="emp_no">Employee Number:</label>
		<input type="text" id="emp_no" name="emp_no"  required><br><br>
		<label for="new_designation">New Designation:</label>
		<input type="text" id="new_designation" name="new_designation" required><br><br>
		<label for="new_salary">New Salary:</label>
		<input type="number" id="new_salary" name="new_salary" required><br><br>
		<input type="submit" name="submit" value="Promote">
	</form>
    <script>
        document.getElementById("emp_no").onkeypress = function(e) {
        var keyCode = e.which ? e.which : e.keyCode;
        if (keyCode < 48 || keyCode > 57) {
            return false;
        }
    }
    </script>
    <?php 
        if(isset($_POST['submit'])){
            require_once "createDB.php";
            
            if(!$sbh){
              die("Connection  not Succesfull ");
            }
            else{
                $sql =" UPDATE companymangement.attandance SET salary = 40000, designation='Senior Devloper'  WHERE emp_no=1015";
                $res=$sbh->prepare($sql);
                // $res->bindParam(':empno',$_REQUEST['emp_no']);
                // $res->bindParam(':newsalary',$_REQUEST['new_salary']);
                // $res->bindParam(':newdesignation',$_REQUEST['new_designation']);
                $res->execute();
                header('location:index7.php?msg= Data Update');

            }
        }
    ?>
</body>
</html>
