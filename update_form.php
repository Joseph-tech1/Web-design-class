<html>
    <head>
    <?php
      include("css.html");
      ?>
    </head>
    <body class="bg-decor">
              <?php
              include("nav.html");
              ?>

      <div class="container"><br><br><br>
            <div class="row "> 
                <h4>Update User info:</h4> 
                <?php
                    include("db_connect.php"); 

                        // get the item ID from the URL
                        $item_id = isset($_GET['param']) ? intval($_GET['param']) : 0;

                        //query to delete the ID from the table
                        $query = "SELECT * FROM process1 WHERE ID = $item_id";

                        //execute the query
                        $result = mysqli_query ($conn, $query);
                        if(mysqli_num_rows($result)> 0){
                            // fetch and organize the dats 
                        $row = mysqli_fetch_assoc($result);
                        

                ?>
            <form action="process_update.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">

                <input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
                  <label for="firstname">First name:</label>
                  <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $row['First_name'];?>" >
                </div>
                <div class="form-group">
                  <label for="lastname">Last name:</label>
                  <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $row['Last_name'];?>" >
                </div>
                <div class="form-group">
                    <label for="companyname">Company name:</label>
                    <input type="text" name="companyname" class="form-control" id="companyname" value="<?php echo $row['Company_name'];?>" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['Email'];?>" >
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="address" name="address" class="form-control" id="address" value="<?php echo $row['User_address'];?>" >
                  </div><br><br>
                  <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-group" id="edit-actions">
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                  </div>
              </form>
              <?php
                        
                    }
                    
              ?>
            </div>                
           </div>

                                       
    
              <?php
              include("footer.html");
              ?>
              <?php
              include("js.html");
              ?>

</html>