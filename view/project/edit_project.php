<?php
include "../../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Project Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <!--Js script--->
  <script src="../dist/js/script.js"></script>
  <script src="../dist/js/jquery-3.6.0.min.js"></script> 

</head>

<body>
  <div class="container">
    <h2>Edit Project Details</h2>
    <hr>
    <hr>

    <?php
    
    $id= $_GET['id'];
    if (isset($_GET['id'])){
      $query = "SELECT * FROM new_project WHERE project_id= ? "; // limited to 1 row
      $statement = $conn->prepare($query);
      $statement->execute([$id]);
      $result = $statement->fetch(PDO::FETCH_OBJ);

    ?>

      <form method="post" action="../../controllers/projectActionCode.php?id=<?php echo $result->project_id;// To pass id
                                                                      ?>" class="row">


        <div class="col-md-6 mb-3">
          <label for="project_name" class="form-label">Project Name</label>
          <input type="text" name="project_name" required class="form-control" value="<?php echo $result->project_name; ?> ">
        </div>

          <div class="col-md-6 mb-3">
          <label for="description" class="form-label">Description:</label>
          <input type="text" name="description" required class="form-control" value="<?php echo $result->description; ?> ">
        </div>

        <div class="col-md-6 mb-3">
          <label for="duration" class="form-label">Duration:</label>
          <input type="text" name="duration" required class="form-control" value="<?php echo $result->duration; ?> ">
        </div>

        <div class="col-md-6 mb-3">
          <label for="tech_involved" class="form-label">Technology:</label>
          <input type="text" name="tech_involved" required class="form-control" value="<?php echo $result->tech_involved; ?> ">
        </div>

        </div>
        <hr>

        <div class="col-12">
          <button type="submit" name="project_update_btn" class="btn btn-primary">Update Details</button>
        </div>
      </form>
    <?php
    }
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz