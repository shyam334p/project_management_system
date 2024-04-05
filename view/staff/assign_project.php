<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Create New Staff</title>

    <!--------bootstrap css---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!---------jquery file--------->
    <script src="../dist/js/jquery-3.6.0.min.js"></script> <!--Jquery--->
    <script src="../dist/js/script.js"></script><!--Js--->

</head>

<body>
    <div class="container">
        <h2>Assign new Project</h2>
        <hr>
        <hr>
        <form id="add_staff" method="post" action="../../controllers/staffActionCode.php" class="row" enctype="multipart/form-data">

            <?php
            include "../../config/connection.php";

            ?>


            <div class="col-sm-9">
                <label for="staff_name" class="form-label"> Staff Name:</label>

                <?php

                try {
                    $sql = "select staff_id, staff_name from staff_details";

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
                <br><br>

                <label for="project_name" class="form-label">Project Name:</label>

                <?php

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
                <br><br>
                <label for="desigantion" class="form-label">Designation:</label>
                <select name="designation" id="designation" required class="form-select">
                    <option value="team_lead">Team Lead</option>
                    <option value="senior_developer">Senior Developer</option>
                    <option value="junior_developer">Junior Developer</option>
                    <option value="tester">Tester</option>
                    <option value="designer">Designer</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="task" class="form-label">Task:</label>
                <input type="text" id="task" name="task" required class="form-control">
                <span class="error-message"></span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="comments" class="form-label">Comments</label>
                <input type="text" id="comments" name="comments" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" id="due_date" name="due_date" required class="form-control">
                <span class="error-message"></span>
            </div>
            <hr>
            <div class="col-12">
                <button type="submit" id="project_assign_submit" name="project_assign_submit" class="btn btn-primary">Assign New Project</button>
            </div>
        </form>
    </div>

    <!-------bootstrap js--------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz