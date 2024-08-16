<?php
include("db_connect.php");
 
//sql querry to sellect all user
$query = "SELECT * FROM process1";
 
//execute the query
$result = mysqli_query($conn,$query);

//check if there are any results in the table
if(mysqli_num_rows($result) > 0)  {

    //fetch and display the data
    while($row = mysqli_fetch_assoc($result)) {
    echo"<ul><li>" .$row['First_name']. ',' .$row['Last_name']. ',' .$row['Company_name']. "</li></ul>";
}
}
?>