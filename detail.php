
<?php
    include("db_connect.php");


    // get the item ID from the URL
    $item_id = isset($_GET['param']) ? intval($_GET['param']) : 0;

    //Fetch item details from the database
    $query = "SELECT * FROM process1 WHERE ID = $item_id";

    $result = mysqli_query ($conn, $query);

    if(mysqli_num_rows($result)> 0){
        $item = mysqli_fetch_assoc($result);

   ?>

    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <title>Details Page</title>
        </head>

<body>
    <div class="container">
        <div class="row bg-dark">
            <?php include("nav.html"); ?> 
        </div>
        <h3>The details of <?php echo $item['First_name']; ?></h3>
        <ul>
            <li><b>First name: </b><?php echo $item['First_name']; ?></li>
            <li><b>Last_name: </b><?php echo $item['Last_name']; ?></li>
            <li><b>Company_name: </b><?php echo $item['Company_name']; ?></li>
            <li><b>Email: </b><?php echo $item['Email']; ?></li>
            <li><b>Address: </b><?php echo $item['User_address']; ?></li>

        </ul>

        <div class="row mt-4">

        </div>
        <?php
    }
    else{
        echo "There is no item found with that ID";
    }
    ?>
  
    </div>
    <?php include('js.html'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>