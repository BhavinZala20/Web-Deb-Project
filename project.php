<html>
    <head>
        <title> Project reords</title>
        <style>
            body{
                background-color: bisque;
            }
            header{
                    
                    top:0;
                    left:0;
                    background-color: 009879;
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

        </style>
    </head>
    <body>
        <header>B A R
            </header>
        <?php
            if(isset($_REQUEST['msg'])){
                ?>
                <h4><?php echo $_REQUEST['msg'] ; ?></h4>
                <?php 
            }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Employee ID </th>
                    <th>Project Name</th>
                    <th>Employee role</th>
                    <th>Project Status</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    require_once "createDB.php";
                    // sql statement to retrive the data from the db
                    $sql= 'select * from companymangement.project where emp_no=1015';
                    // Excute the statement using the (functinon)
                    $res=$sbh->query($sql);
                    // $res = $dbh->exec($sql);
                    if($res->rowCount()>0)
                    {
                        while($row=$res->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $row['pid'];?></td>
                                <td><?php echo $row['emp_no'];?></td>
                                <td><?php echo $row['pname'];?></td>
                                <td><?php echo $row['roll'];?></td>
                                <td><?php echo $row['pstatus'];?></td>
                                <td><?php echo $row['due'];?></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>