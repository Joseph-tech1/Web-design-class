<html>
    <head>
    <?php
      include("css.html");
      ?>
    </head>
    <body>
    <div class="container">
        <div class="row bg-dark">
            <?php include("nav.html"); ?> 
        </div></br></br></br></br></br></br>
        <?php
            include('db_connect.php');

            // SQL query to select all users
            $limit = 15;
            $query = "SELECT * FROM process1 LIMIT $limit";

            // Execute the query
            $result = mysqli_query($conn, $query);
        ?>
        <div class="row mt-4">
        <?php
                    if (isset($_GET['status'])){
                        if ($_GET['status'] == 'success'){
                            echo "<p style='color:green'> The User has been added successfully!</p>";
                        }
                    }
                ?>
            <button class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createPetModal">Add user</button>
            <table id="table" class="table table-striped table-bordered">
                <caption>A table showing Users added</caption>
                <tr class="table-primary">
                    <th class="th">First name</th>
                    <th class="th">First name</th>
                    <th class="th">Last name</th>
                    <th class="th">Email</th>
                    <th class="th">Address</th>
                    <th class="th">User image</th>
                    <th class="th">Change info</th>
                    
                </tr>
                <tbody>
                    <?php
                        // Check if there are any results in the table
                        if(mysqli_num_rows($result) > 0){
                            // Fetch and display the data
                            while($row = mysqli_fetch_assoc($result)){
                    ?> 
                        <!-- Put the retrieved data in a row -->
                        <tr class="table-success">
                            <td class="td"><?php echo $row['ID']; ?></td>
                            <td class="td"><a href="detail.php?id=<?php echo $row['ID'];?>"><?php echo $row['First_name']; ?></td></a>
                            <td class="td"><?php echo $row['Last_name']; ?></td>
                            <td class="td"><?php echo $row['Email']; ?></td>
                            <td class="td"><?php echo $row['User_address']; ?></td>
                            <td class="td"><?php echo $row['User_image']; ?></td>
                            <td class="td">
                                <a href="update_form.php?param=<?php echo $row['ID']; ?>">
                                <button class="btn btn-success">Edit</button>
                                </a>
                                 | 
                                <a href="delete.php?param=<?php echo $row['ID']; ?>" >
                                   <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
    <?php
              include("footer.html");
              ?>
              <?php
              include("js.html");
              ?>
    </body>
</html>