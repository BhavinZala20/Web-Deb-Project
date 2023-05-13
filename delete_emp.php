<?php
    require_once 'createDB.php';
    try
    {
        $sql="DELETE FROM employee WHERE emp_no=:id";
            // create prepare statement
        $res=$sbh->prepare($sql);

            // bind parameters to statement
        $res->bindParam(':id',$_REQUEST['id']);
            // excute the prepare statement
            $res->execute();
            header('location:index1.php?msg= Data Deleted');
            echo "data updated successfully";
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>