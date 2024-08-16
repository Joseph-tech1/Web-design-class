
    <?php
    include("db_connect.php");

    // get the item ID from the URL
    $item_id = isset($_GET['param']) ? intval($_GET['param']) : 0;

    //query to delete the ID from the table
    $query = "DELETE FROM process1 WHERE ID = $item_id";
    
    if(mysqli_query($conn, $query)){
        header("Location: users_form.php?status=delete");
        echo "User sucessfully deleted";
       
    }
    else{
        echo "There was a problem in query or connection";
    }
?>