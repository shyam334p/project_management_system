<?php
include "../../config/connection.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Mangement System - project-Assign-Details</title>

    <!-------bootstrap css--------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--------js script--------->
    <script src="../../dist/js/jquery-3.7.1.js"></script>
    <script src="../../dist/js/validation_script.js"></script>
    <!--------script ends here----->


    <!--------css------------->
    <style>
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f5f5f5;
        }
    </style>
    <!---------css ends here----->

</head>

<body>
    <div class="container mt-3">
        <h1>Project Assign Details</h1>
        <hr>
        <hr>
        <table class="table table-striped">
            <thead>
                <a name="go_back_btn" id="go_back_btn" href="../../view/staff/team_lead_dashboard.php" class="btn btn-dark mb-3">To Return to dashboard<i class="fa-solid fa-arrow-left"></i></a><br><br>

                <a href="assign_project.php" class="btn btn-dark mb-3">Assign Project &nbsp;<i class="fa-solid fa-plus"></i></a>
                <tr>
                    <th>Project Name</th>
                    <th>Staff Name</th>
                    <th>Designation</th>
                    <th>Task</th>
                    <th>Comments</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM  projects";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll();
            if ($result) {

                foreach ($result as $row) {
            ?>
                    <tr>
                        <td><?= $row['project_name'] ?></td>
                        <td><?= $row['staff_name'] ?></td>
                        <td><?= $row['designation'] ?></td>
                        <td><?= $row['task'] ?></td>
                        <td><?= $row['comments'] ?></td>
                        <td><?= $row['due_date'] ?></td>
                        <td>
                        <a href="#"  class="del_btn" data-id="<?= $row["assign_id"] ?>">Delete</a>
                            <a name="project_assign_edit" id="project_assign_edit" href="./edit_project_assign.php?id=<?php echo $row["assign_id"] ?>"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        </td>
                    </tr>
                <?php

                }
            } else {
                ?>
                <tr>
                    <td colspan="9">No Record Found</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <script>
        //delete project assign
        $(document).ready(function() {
            $(".del_btn").click(function(e) {
                e.preventDefault();
                var assign_id = $(this).data('id');
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: '../../controllers/delete/project_assign_delete.php',
                        type: 'POST',
                        data: {
                            assign_id: assign_id
                        },
                        success: function(response) {
                            alert(response);
                            window.location.reload();
                            // Reload or update the view after deletion
                        },
                        error: function(xhr, status, error) {
                            alert("Error occurred while deleting: " + error);
                        }
                    });
                }
            });
        });
    </script>



</body>

</html>