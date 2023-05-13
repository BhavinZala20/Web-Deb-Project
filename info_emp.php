<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
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
                
                
                body{
                    font-family: sans-serif;
                    background-color: #f3f3f3;
                      /* background: linear-gradient(#141e30, #243b55); */
                
                }
                 .container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 1rem;
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
		<a href="index.php" class="brand">
			<span class="text">BAR</span>
            <span class="text1">Technologies</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="admin_dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="index1.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Employee </span>
				</a>
			</li>
			<li >
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
			<li >
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
			<a href="#" class="profile">
				<img src="logo4.png">
			</a>
		</nav>
		<!-- NAVBAR -->


		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left4">
					<h1>Employee Information</h1>
			
			
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
            ?>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Employee Number:</td>
                        <td><?php echo ' ' . $employee['emp_no'] . '<br>';  ?></td>
                    </tr>
                    <tr>
                        <td>Employee Name:</td>
                        <td><?php echo '' . $employee['emp_name'] . '<br>';?></td>
                    </tr>
                    <tr>
                        <td>Employee Address:</td>
                        <td><?php echo ' ' . $employee['emp_add'] . '<br>';?></td>
                    </tr>
                    <tr>
                        <td>Mobile:</td>
                        <td><?php echo '' . $employee['mobile'] . '<br>';?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo ' ' . $employee['dob'] . '<br>';?></td>
                    </tr>
                    <tr>
                        <td>Date of Joining:</td>
                        <td><?php echo ' ' . $employee['doj'] . '<br>';?></td>
                    </tr>
                        <?php

            // Display the project information (if available)
                        if ($employee['pname']) {
                            ?>
                            <tr>
                                <td>Project Name:</td>
                                <td><?php echo '' . $employee['pname'] . '<br>';     ?></td>
                            </tr>
                            <tr>
                                <td>Role: </td>
                                <td><?php echo '' . $employee['roll'] . '<br>';?></td>
                            </tr>
                            <tr>
                                <td>Project Status:</td>
                                <td><?php echo ' ' . $employee['pstatus'] . '<br>';?></td>
                            </tr>
                            <tr>
                                <td>Due Date:</td>
                                <td><?php echo ' ' . $employee['due'] . '<br>';?></td>
                            </tr>
                            <?php
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td>project </td>
                                <td>No </td>
                            </tr>
                            
                            <?php
                        }?>
                    <?php
                        if ($employee['designation']) {
                            ?>
                            <tr>
                                <td>Salary</td>
                                <td><?php echo '' . $employee['salary'] . '<br>';     ?></td>
                            </tr>
                            <tr>
                                <td>Month attandance</td>
                                <td><?php echo '' . $employee['month_attandance'] . '<br>';?></td>
                            </tr>
                            <tr>
                                <td>month  Absent:</td>
                                <td><?php echo ' ' . $employee['month_absent'] . '<br>';?></td>
                            </tr>
                            <tr>
                                <td>designation :</td>
                                <td><?php echo ' ' . $employee['designation'] . '<br>';?></td>
                            </tr>
                            <?php
                        }
                    ?>
                    <tr>

                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </tbody>
        </table>
        </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="script.js"></script>
</body>
</html>