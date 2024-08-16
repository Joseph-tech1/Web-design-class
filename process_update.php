<?php
     include("db_connect.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_POST ["ID"];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $companyname=$_POST['companyname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        

      #what should I do with this data?    
       #Insert into the database
      $sql=" UPDATE process1 SET First_name=?, Last_name=?, Company_name=?, Email=?, User_address=? WHERE ID=$id";

        //prepare statement
        if ( $stmt = mysqli_prepare($conn, $sql) ) {

        #bind parameters
        mysqli_stmt_bind_param($stmt,"sssss", $firstname, $lastname, $companyname,$email, $address, ) ;


        mysqli_stmt_execute($stmt); 
        }
       
        header("Location: users_form.php");    
    }

    else{
        echo "This page can not be accessed using the get method";
    }
?>