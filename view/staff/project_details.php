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
    <title>Project Mangement System - Staff Details</title>

    <!-------bootstrap css--------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--------js script--------->
    <script src= "../../dist/js/jquery-3.7.1.js"></script>
    <script src="../../dist/js/delete_function.js"></script>
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
        <h1>Staff Details</h1>
        <hr>
        <hr>
        <table class="table table-striped">
            <thead>
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
            $query = "SELECT * FROM projects";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll();
            if ($result) {

                foreach ($result as $row) {
            ?>
                    <tr>
                        <td><?=$row['project_name'] ?></td>
                        <td><?= $row['staff_name'] ?></td>
                        <td><?= $row['desigantion'] ?></td>
                        <td><?= $row['task'] ?></td>
                        <td><?= $row['comments'] ?></td>
                        <td><?= $row['due_date'] ?></td>
                        <td>
                            <a name="project_edit_btn" id="staff_edit_btn" href="../admin/edit_staff.php?id=<?php echo $row["staff_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a  name="project_delete_btn" id="staff_delete_btn" href="../../controllers/adminCode.php?id=<?php echo $row["staff_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
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
</body>

</html>