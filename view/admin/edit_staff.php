<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../../config/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Staff Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <!--Js script--->
  <script src="../dist/js/script.js"></script>
  <script src="../dist/js/jquery-3.6.0.min.js"></script> 

</head>

<body>
  <div class="container">
    <h2>Edit Staff Details</h2>
    <hr>
    <hr>

    <?php
    $id= $_GET['id'];
    if (isset($_GET['id'])) {
     
      $query = "SELECT * FROM staff_details WHERE staff_id=?"; // limited to 1 row
      $statement = $conn->prepare($query);
      $statement->execute([$id]);
      $result = $statement->fetch(PDO::FETCH_OBJ);

    ?>

      <form method="post" action="../../controllers/adminActionCode.php?id=<?php echo $result->staff_id; ?>" class="row"> 
                                                                      


        <div class="col-md-6 mb-3">
          <label for="staff_name" class="form-label">Staff Name</label>
          <input type="text" name="staff_name" required class="form-control" value="<?php echo $result->staff_name; ?> ">
        </div>
        <div class="col-md-6 mb-3">
          <label for="mail_id" class="form-label">E-mail:</label>
          <input type="text" name="mail_id" required class="form-control" value="<?php echo $result->mail_id; ?> ">
        </div>
        <div class="col-md-6 mb-3">
          <label for="designation" class="form-label">Designation:</label>
          <select name="designation" required class="form-select">
            <option value="team_lead" <?php if ($result->designation == 'team_lead') {
                                        echo "selected";
                                      } ?>>Team Lead</option>
            <option value="seinor_developer" <?php if ($result->designation == 'senior_developer') {
                                                echo "selected";
                                              } ?>>Senior Developer</option>
            <option value="junior_developer" <?php if ($result->designation == 'junior_developer') {
                                                echo "selected";
                                              } ?>>Junior Developer</option>
            <option value="tester" <?php if ($result->designation == 'tester') {
                                      echo "selected";
                                    } ?>>Tester</option>
            <option value="designer" <?php if ($result->designation == 'designer') {
                                        echo "selected";
                                      } ?>>Designer</option>
          </select>
        </div>
        <hr>

        <div class="col-12">
          <input type="submit" name="submit_update_btn" class="btn btn-primary">Update Details</input>
        </div>
      </form>
    <?php
    }
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz