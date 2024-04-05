<?php
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
    <h2>Edit Project Assign Details</h2>
    <hr>
    <hr>

    <?php
    // Fetch data from table 'projects'
    $id= $_GET['id'];
    if (isset($_GET['id'])){
      $query = "SELECT * FROM projects WHERE assign_id = ?"; // limited to 1 row
      $statement = $conn->prepare($query);
      $statement->execute([$id]);
      $result = $statement->fetch(PDO::FETCH_OBJ);


        $query = "SELECT * FROM staff_details WHERE staff_id = ?"; // limited to 1 row
        $statement = $conn->prepare($query);
        $statement->execute([$id]);
        $result = $statement->fetch(PDO::FETCH_OBJ);

  
    ?>  

      <form method="post" action="../../controllers/staffActionCode.php?id=<?php echo $result->assign_id;?>" class="row">


      <div class="col-md-6 mb-3">

                <label for="project_name" class="form-label">Project Name:</label>

                <?php

                // To fetch project name from table "projects" and display it as drop down menu 
                try {
                    $sql = "select project_id,project_name from new_project";

                    $projresult = $conn->query($sql);
                    $projresult->setFetchMode(PDO::FETCH_ASSOC);
                    echo '<select name="project_name"  id="project_name" class="form-control" >';
                    while ($row = $projresult->fetch()) {
                        echo '<option value="' . $row['project_name'] . '">' . $row['project_name'] . '</option>';
                    }
                    echo '</select>';
                } catch (PDOException $e) {
                    die("Some problem getting data from database !!!" . $e->getMessage());
                }


                ?>
            </div>

        <div class="col-md-6 mb-3">

                <label for="project_name" class="form-label">Staff Name:</label>

                <?php

                // To fetch project name from table "projects" and display it as drop down menu 
                try {
                    $sql = "select staff_id,staff_name from staff_details";

                    $projresult = $conn->query($sql);
                    $projresult->setFetchMode(PDO::FETCH_ASSOC);
                    echo '<select name="staff_name"  id="staff_name" class="form-control" >';
                    while ($row = $projresult->fetch()) {
                        echo '<option value="' . $row['staff_name'] . '">' . $row['staff_name'] . '</option>';
                    }
                    echo '</select>';
                } catch (PDOException $e) {
                    die("Some problem getting data from database !!!" . $e->getMessage());
                }


                ?>
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
          <div class="col-md-6 mb-3">
            <br>
          <label for="task" class="form-label">Task:</label>
          <input type="text" name="task" required class="form-control" value="<?php echo $result->task; ?> ">
        </div>

        <div class="col-md-6 mb-3">
          <label for="comments" class="form-label">Comments:</label>
          <input type="text" name="comments" required class="form-control" value="<?php echo $result->comments; ?> ">
        </div>

        <div class="col-md-6 mb-3">
          <label for="due_date" class="form-label">Due Date:</label>
          <input type="date" name="due_date" required class="form-control" value="<?php echo $result->due_date; ?> ">
        </div>

        </div>
        <hr>

        <div class="col-12">
          <button type="submit" name="assign_update_btn" class="btn btn-primary">Update Details</button>
        </div>
      </form>
    <?php
    }
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz