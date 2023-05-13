<?php
    require_once 'createDB.php';
    try
    {
        $sql="DELETE FROM applicant WHERE email=:email";
            // create prepare statement
        $res=$sbh->prepare($sql);

            // bind parameters to statement
        $res->bindParam(':email',$_REQUEST['email']);
            // excute the prepare statement
            $res->execute();
            header('location:index4.php?msg=  Rejected');
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>