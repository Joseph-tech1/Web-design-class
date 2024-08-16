<?php
    include("db_connect.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $yournames=$_POST['yournames'];
        $Tel_no=$_POST['Tel_no'];
       

        echo "<h2> Contact form submission</h2>";
        echo "Your names: " .$yournames. "<br>";
        echo "Tel no.: " .$Tel_no. "<br>";

    }

    else{
        echo "This page can not be accessed using the get method";
    }
?>
 