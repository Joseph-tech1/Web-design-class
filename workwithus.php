<html>
  <head>
    <?php
    include("css.html");
    ?>
  </head>
<body class="bg-decor">
    <div class="container-fluid">
      <div class="row bg-dark">
        <?php
        include("nav.html");
        ?>
      </div><br><br><br><br>
    </div
    <div class="container-fluid">
      <h1>JOIN OUR TEAM</h1> 
      <form action="process_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="firstname">First name:</label>
          <input type="text" name="firstname" class="form-control" id="firstname">
        </div>
        <div class="form-group">
          <label for="lastname">Last name:</label>
          <input type="text" name="lastname" class="form-control" id="lastname">
        </div>
        <div class="form-group">
          <label for="companyname">Company name:</label>
          <input type="text" name="companyname" class="form-control" id="companyname">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
      <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" name="address" class="form-control" id="address">
      </div>


      <small class="description text-muted">
      <div id="edit-notes--description" class="webform-element-description">Provide any additional information in regards to your self.</div>

      </small>
      </fieldset>
      <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-group" id="edit-actions"><input class="webform-button--submit button button--primary js-form-submit form-submit btn btn-primary form-control" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Submit"></div>
      </form>

    </p>
    <form action="feedback_form.php" method="POST">
    <h2>TALK TO US</h2>
    <p>Feedback</p>
    <div class="form-group">
    <label for="yournames">Your names:</label>
    <input type="yournames" name="yournames" class="form-control" id="yournames">
    </div>
    <div class="form-group">
    <label for="Tel_no">Tel. no.:</label>
    <input type="number" name="Tel_no" class="form-control" id="number">
    </div>
    <fieldset class="js-form-item js-form-type-textarea form-type-textarea js-form-item-notes form-item-notes form-group">
    <label for="edit-notes">Notes</label>
    <div class="form-textarea-wrapper">
    <textarea data-drupal-selector="edit-notes" aria-describedby="edit-notes--description" id="edit-notes" name="notes" rows="5" cols="60" class="form-textarea form-control resize-vertical"></textarea>
    </div>

    <small class="description text-muted">
    <div id="edit-notes--description" class="webform-element-description">Give us a Feedback regarding our services.</div>

    </small>
    </fieldset>
    <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-group" id="edit-actions"><input class="webform-button--submit button button--primary js-form-submit form-submit btn btn-primary form-control" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Submit">

    </div>
    </form>
    <p style="color: goldenrod; text-align: center; font: bold; font-size: 40px;">
    "Thanks for Visiting Us" 
    </p>               
    </div>
    <?php
    include("footer.html");
    ?>
    <?php
    include("js.html");
    ?>
</body>
</html>