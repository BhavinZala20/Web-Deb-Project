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
            body {
        font-family: Arial, sans-serif;
        background-color: 009879;
      }
      #form1 {
        top: 7%;
        position:relative ;
        background-color: bisque;
        border: 1px solid #ccc;
        border-radius: 10PX;
        margin: 0 auto;
        width: 400px;
        max-width: 500px;
        padding: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type=text], input[type=date],input[type=number]{
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
			<li>
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
			<li class="active">
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
				<img src="logo4.png">
			</a>
		</nav>
		<!-- NAVBAR -->


		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>New Project</h1>
			
			<!-- <button><a href="add_employee.php">Add Employee</a></button> -->
        <br>

        <form class="form1" method="POST">
    <!-- <label>Project ID :</label> <input type="number" name="p_no" id="p_no" required><br> -->
    <label>Project name</label> <input type="text" name="p_name" id="p_name" required> <br>
    <label></label> <input type="number" name="emp" id="emp" required> <br>
    <label >Due</label> <input type="date" name="p_date" id="p_date" required> <br>
    <input type="submit" name="submit" id="submit" value="Create" required>
    </form>
           </div>
        </main>
		
				<!-- MAIN -->
	</section>
    <?php
        if
    ?>
	<!-- CONTENT -->
	<script src="script.js"></script>
</body>
</html>