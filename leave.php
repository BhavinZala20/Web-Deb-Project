<!DOCTYPE html>
<html>
<head>
	<title>Leave Request Form</title>
	<style>
		header{              
                
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
			background-color: bisque;
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			color: #333;
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
			margin-bottom: 5px;
			color: #fff;
		}

		input[type="text"], input[type="email"], textarea {
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 15px;
		}

		input[type="date"] {
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			margin-bottom: 15px;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}
		
	</style>
</head>
<body>
	<header>B A R </header>
	<h1>Leave Request Form</h1>
	<form method="POST" action="submit_leave.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="start_date">Start Date:</label>
		<input type="date" id="start_date" name="start_date" required>

		<label for="end_date">End Date:</label>
		<input type="date" id="end_date" name="end_date" required>

		<label for="reason">Reason:</label>
		<textarea id="reason" name="reason" required></textarea>
		<center>
		<input type="submit" value="Submit">
	</center>
	</form>
</body>
</html>
