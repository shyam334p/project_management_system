<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/styles/error.css">


    <title>Create New Staff</title>

    <!--------bootstrap css---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!---------jquery file--------->
    <script src="../../dist/js/jquery-3.6.0.min.js"></script> <!--Jquery--->
    <script src="../../dist/js/script.js"></script><!--Js--->
    <script src="../../dist/js/validation_script.js"></script><!--validation--->

</head>

<body>
    <div class="container">
        <h2>Add Staff Details</h2>
        <hr>
        <hr>
        <form id="add_staff" method="post" action="../../controllers/adminActionCode.php" class="row" enctype="multipart/form-data">
            <!-------------Image upload fiels------------>
            <div class="col-md-6 mb-3">
                <label for="staff_name" class="form-label">Staff Name:</label>
                <input type="text" id="staff_name" name="staff_name" pattern="[A-Za-z]{3-35}" required class="form-control">
                <span class="error-message"></span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mail_id" class="form-label">Email:</label>
                <input type="email" id="mail_id" name="mail_id" required class="form-control">
                <span class="error-message"></span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="desigantion" class="form-label">Designation:</label>
                <select name="designation" id="designation" required class="form-select">
                    <option value="team_lead">Team Lead</option>
                    <option value="senior_developer">Senior Developer</option>
                    <option value="junior_developer">Junior Developer</option>
                    <option value="tester">Tester</option>
                    <option value="designer">Designer</option>
                </select>
            </div>
            <div class="mb-3">
                <h3>Upload Staff Image :</h3>
                <input type="file" id="staff_image" name="staff_image" required>
            </div>
            <hr>
            <div class="col-12">
                <button type="submit" name="staff_submit" class="btn btn-primary">Create New Staff</button>
            </div>
            
        </form>

        
    </div>

    <!-------bootstrap js--------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz