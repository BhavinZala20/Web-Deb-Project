<html>
    <head>
        <title> List reords</title>
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
                    background-color: bisque;
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
                    right: 20%;
                    
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
            
            /* table {
                border-collapse: collapse;
                width: 100%;
                }

                th,
                td {
                text-align: left;
                padding: 8px;
                }

                th {
                background-color: #f2f2f2;
                }

                tr:nth-child(even) {
                background-color: #f2f2f2;
                }

                h4 {
                color: green;
                font-size: 20px;
                margin-bottom: 10px;
            } */

        </style>
    </head>
    <body>
        <header >
            B A R
        </header>
        <?php
            if(isset($_REQUEST['msg'])){
                ?>
                <h4><?php echo $_REQUEST['msg'] ; ?></h4>
                <?php 
            }
        ?>
            <button><a href="add_employee.php">Add Employee</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Salary</th>
                    <th>designation</th>
                    <th>month_attandance </th>
                    <th>month_absent</th>
                    <th>year_attandance</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    require_once "createDB.php";
                    // sql statement to retrive the data from the db
                    $sql= 'select * from companymangement.attandance group by year_attandance desc';
                    // Excute the statement using the (functinon)
                    $res=$sbh->query($sql);
                    // $res = $dbh->exec($sql);
                    if($res->rowCount()>0)
                    {
                        while($row=$res->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $row['emp_no'];?></td>
                                <td><?php echo $row['salary'];?></td>
                                <td><?php echo $row['designation'];?></td>
                                <td><?php echo $row['month_attandance'];?></td>
                                <td><?php echo $row['month_absent'];?></td>
                                <td><?php echo $row['year_attandance'];?></td>
                                <td><a href="promotion.php? id=<?php echo $row['emp_no']; ?>">Promote</a></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>