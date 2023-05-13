<?php
            // echo $_REQUEST['id1'];
            require_once "createDB.php";
            // sql statement to retrive the data from the db
            // $sql= 'select * from companymangement.Employee where emp_no=:id';
            // Excute the statement using the (functinon)
            // $res=$sbh->prepare($sql);
            // $res->bindParam(':id',$_REQUEST['id']);
            $emp_no = $_REQUEST['id'];
            // $res = $dbh->exec($sql);
            $stmt = $sbh->prepare('SELECT e.*, t.available_sheets, t.working_days, p.pname, p.roll, p.pstatus, p.due, a.month_attandance,a.month_absent,a.salary,a.designation
                       FROM Employee e 
                       LEFT JOIN TechnicalJob t ON e.emp_no = t.emp_no 
                       LEFT JOIN project p ON e.emp_no = p.emp_no 
                       LEFT JOIN attandance a ON e.emp_no = a.emp_no 
                       WHERE e.emp_no = :emp_no');
            $stmt->execute(['emp_no' => $emp_no]);

            // Retrieve the results
            $employee = $stmt->fetch();
            $name = $employee['emp_name'] ;
            $addr = $employee['emp_add'] ;
            $mob = $employee['mobile'];
            $dob = $employee['dob'];
?>          
<html>
    <head>
        <title> Department </title>
          <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	    <!-- My CSS -->
	    <link rel="stylesheet" href="style.css">

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
              background-color: #f4f4f4;
      }
             .container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 1rem;
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
            button{
                     
                background-color:  #009879; 
                position: absolute;
                top:30%;
                right: 2%;
                
                /* background-color: #4CAF50; Green */
                border: 2px;
                color: #fff;
                font-family: sans-serif;
                text-align: center;
                text-decoration: none;
                display:list-item;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                transition-duration: 0.4s;
                justify-content: center;
                padding: 15px 32px;
                box-shadow: 0 0 12px whitex;
            }

            .table {
                background-color: white;
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }

            .table th,
            .table td {
                padding: 12px 15px;
            }

            .table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
                
            }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin_dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="index1.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Employee</span>
				</a>
			</li>
			<li>
				<a href="index2.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Department</span>
				</a>
			</li>
			<li>
				<a href="index4.php">
                <i class='bx bxs-group' ></i>
					<span class="text">Applicant</span>
				</a>
			</li>
			<li>
				<a href="index6.php">
					<!-- <i class='bx bxs-shopping-bag-alt' ></i> -->
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">Project</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
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
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Employee Data</h1>
			
			<!-- <button><a href="add_employee.php">Add Employee</a></button> -->
        <br>

        
        <form method="POST">
            <div>
            <label > ID :</label> <input type="text" id="e_id" name="e_id" value="<?php echo $_REQUEST['id'];?>"  require><br>
            <label >Name :</label>         <input type="text" id="e_name" name="e_name" value="<?php echo $name ?>" require><br>
            <label >New Address :</label>         <input type="text" id="e_add" name="e_add" value="<?php echo $addr ?>" require><br>
            <label >New Contact : </label>         <input type="text" id="e_mob" name="e_mob" value="<?php echo $mob ?>" require><br>
            <label >Date Of Birth : </label>         <input type="text" id="e_dob" name="e_dob" value="<?php echo $dob ?>" require><br>
            <input type="submit" name="submit" value="Update" style="margin-left: 40%; margin-top: 25px; ">
            </div>
        </form>
        <?php  
        if(isset($_POST['submit'])) {  
        if($nameErr == "" &&  $idErr == "" && $mobilenoErr=="") {  
            // echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
            require_once "createDB.php";

            if(!$sbh){
              die("Connection  not Succesfull ");
            }
            else{
                require_once "createDB.php";
                $sql ="UPDATE employee SET emp_name=:ename, emp_add=:eaddr,mobile=:econct,dob=:edob WHERE emp_no=:eid";
                $res=$sbh->prepare($sql);
                $res->bindParam(':eid',$_REQUEST['e_id']);
                $res->bindParam(':ename',$_REQUEST['e_name']);
                $res->bindParam(':edob',$_REQUEST['e_dob']);
                $res->bindParam(':eaddr',$_REQUEST['e_add']);
                $res->bindParam(':econct',$_REQUEST['e_mob']);
                $res->execute();
                // header('location:index1.php');
            }

        } 
        }  
    ?>    
                </div>
        </main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="script.js"></script>
    </body>
</html>