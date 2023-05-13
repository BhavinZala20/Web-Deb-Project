<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

  <title>Add Student</title>
  <style>
    /* CSS styles go here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      display: flex;
    }

    .sidebar {
      width: 200px;
      background-color: #ccc;
      padding: 20px;
    }

    .content {
      flex: 1;
      padding: 20px;
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

    select
    {
      display: block;
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    input[type=text],
    input[type=date] {
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
      padding: 10px 10px;
      border-radius: 4px;
      cursor: pointer;
      width: 50%;

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
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="#">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="index1.php">
          <i class='bx bxs-group'></i>
          <span class="text">Employee</span>
        </a>
      </li>
      <li>
        <a href="index2.php">
          <i class='bx bxs-doughnut-chart'></i>
          <span class="text">Department</span>
        </a>
      </li>
      <li>
        <a href="index4.php">
          <i class='bx bxs-group'></i>
          <span class="text">Applicant</span>
        </a>
      </li>
      <li>
        <a href="index6.php">
          <!-- <i class='bx bxs-shopping-bag-alt' ></i> -->
          <i class='bx bxs-calendar-check'></i>
          <span class="text">Project</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="index.php" class="logout">
          <i class='bx bxs-log-out-circle'></i>
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
      <i class='bx bx-menu'></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="img/people.png">
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Add Employee</h1>
        </div>
        <br>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->
  <script src="script.js"></script>
  <?php
  $nameErr = $idErr = $mobilenoErr = "";
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST["e_name"])) {
      $nameErr = "Name is required";
    } else {
      $name = input_data($_POST["e_name"]);
      // check if name only contains letters and whitespace  
      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only alphabets and white space are allowed";
      }
    }
    if (empty($_POST["e_id"])) {
      $idErr = "ID is required ";
    } else {
      $ide = input_data($_POST["e_id"]);
      if (!preg_match("/^[0-9]*$/", $ide)) {
        $idErr = "Only numeric value is allowed.";
      }
      if (strlen($ide) > 6) {
        $idErr = "id not exceed 6 digit.";
      }
    }
    if (empty($_POST["e_mob"])) {
      $mobilenoErr = "Mobile no is required";
    } else {
      $mobileno = input_data($_POST["e_mob"]);
      // check if mobile no is well-formed  
      if (!preg_match("/^[0-9]*$/", $mobileno)) {
        $mobilenoErr = "Only numeric value is allowed.";
      }
      //check mobile no length should not be less and greator than 10  
      if (strlen($mobileno) != 10) {
        $mobilenoErr = "Mobile no must contain 10 digits.";
      }
    }
    $addr = input_data($_POST['e_add']);
    $dob = input_data($_POST['e_dob']);
    $doj = input_data($_POST['e_doj']);
    $contact = input_data($_POST['e_mob']);
  }
  function input_data($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <form method="POST">
    <div>
      <label> ID :</label> <input type="text" id="e_id" name="e_id" require><br>

      <label>Name :</label> <input type="text" id="e_name" name="e_name" require><br>

      <label>Address :</label> <input type="text" id="e_add" name="e_add" require><br>
      <label>Contact : </label> <input type="text" id="e_mob" name="e_mob" require><br>
      <label>DOB :</label> <input type="date" id="e_dob" name="e_dob" require><br>
      <label>Joining Date :</label> <input type="date" id="e_doj" name="e_doj" require><br>
      <label for="Departments">Department :</label>
        <select name="Departments" id="Departments">
          <option value="Software Development">Software Development</option>
          <option value="Quality Assuarance">Quality Assuarance</option>
          <option value="Product Management">Product Management</option>
          <option value="Marketing">Marketing</option>
          <option value="Human Resources">Human Resources</option>
          <option value="Sales">Sales</option>
        </select>
      <input type="submit" name="submit" style="margin-left: 25%; margin-top: 25px; ">
    </div>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    if ($nameErr == "" && $idErr == "" && $mobilenoErr == "") {
      echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
      require_once "createDB.php";

      if (!$sbh) {
        die("Connection  not Succesfull ");
      } else {
        require_once "createDB.php";
        $sql = " INSERT INTO companymangement.Employee (emp_no, emp_name, emp_add, mobile, dob, doj)
                VALUES
                (:eid,:ename,:eaddr,:econct,:edob,:edoj)";
        $res = $sbh->prepare($sql);
        $res->bindParam(':eid', $_REQUEST['e_id']);
        $res->bindParam(':ename', $_REQUEST['e_name']);
        $res->bindParam(':eaddr', $_REQUEST['e_add']);
        $res->bindParam(':econct', $_REQUEST['e_mob']);
        $res->bindParam(':edob', $_REQUEST['e_dob']);
        $res->bindParam(':edoj', $_REQUEST['e_doj']);
        // $res->bindParam(':dept', $_REQUEST['dept']);
        $res->execute();
        // header('location:index1.php?msg= Employee Added');
        require_once "createDB.php";
        $sql = " INSERT INTO companymangement.technicaljob (dept_id, available_sheets, working_days, emp_no)
                VALUES
                (101,25,5,:eid)";
        $res = $sbh->prepare($sql);
        $res->bindParam(':eid', $_REQUEST['e_id']);
        $res->execute();
        

      }

    } else {
      echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";
    }
  }
  ?>
  <div class="container">
    <div class="sidebar">
      <!-- Sidebar content goes here -->
    </div>
    <div class="content">
      <?php
      // Existing PHP code for the form goes here
      ?>
    </div>
  </div>
  <script>
    document.getElementById("e_id").onkeypress = function (e) {
      var keyCode = e.which ? e.which : e.keyCode;
      if (keyCode < 48 || keyCode > 57) {
        return false;
      }
    }
  </script>
</body>
</html>