<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        header.shadow {
            box-shadow: 0 0 4px rgb(14 55 54 / 15%);
        }
        body{
            background-image: url("logo3..png") ;   
        }
        button {
   

            background-color:  #0f0c27; 
            position: relative;
            background: gray;

            /* background-color: #4CAF50; Green */
            border: black solid 2px;
            color: black;
            text-align: center;
            text-decoration: none;
            display:list-item;
            font-size: 16px;
            margin-top: 70px;
            margin-left: 15%;
            cursor: pointer;
            border-radius: 5px;
            transition-duration: 0.4s;
            justify-content: center;
            padding: 15px 32px;
            box-shadow: 0 0 12px black;

        }
        
        
        button:hover {
            background-color: darkgray; /* Dark green */
        }
        
        a {
            color: white;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <header >
        B A R
        
    </header>
   
    <button><a href="index1.php">Employee</a></button>
    <button><a href="index2.php">Department</a></button>
    <button><a href="index4.php">Applicant</a></button>
    <button><a href="index5.php">Payment Details </a></button>
    <button><a href="index6.php">Project Status  </a></button>
    <button><a href="index7.php">Promotion  </a></button>

</body>
</html>
