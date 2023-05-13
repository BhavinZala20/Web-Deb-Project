<!DOCTYPE html>
<html>
<head>
	<title>Employee Events</title>
	<style>
	
		body{
			background-color: black;
			
            background-image: url("logo3..png") ;   
        
		}
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
			border:2px solid white;
            
            }
		.image{
			top:30%;
			height: 733px;
			width:733px;
			position: absolute;
			right:10%;
		}
		ul {
			list-style: none;
			padding: 0;
		}

		li {
			margin-bottom: 10px;
		}

		a {
			top:20%;
			left:5%;
			position: relative;
			display: inline-block;
			padding: 15px 30px;
			background-color: #009879;
			color: white;
			text-decoration: none;
			border-radius: 4px;
			border: 1px white;
			transition: background-color 0.3s ease;
			border-style: solid;
			margin-top: 20px;
		}

		a:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<header>B A R</header>
	<h1>Employee Events</h1>
	<div class="image">
                <!-- <img src="BAR-logos_white.png" alt=""> -->
            </div> 
	<ul>
		<li><a href="leave.php">Leave</a></li>
		<li><a href="loan.php">Loan</a></li>
		<li><a href="project.php">My Projects</a></li>

	</ul>
</body>
</html>
