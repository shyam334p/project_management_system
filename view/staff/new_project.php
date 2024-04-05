<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Add Project</title>

    <!--------bootstrap css---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!---------jquery file--------->
    <script src="../dist/js/jquery-3.6.0.min.js"></script> <!--Jquery--->
    <script src="../dist/js/script.js"></script><!--Js--->

</head>

<body>
    <div class="container">
        <h2>Add Project Details</h2>
        <hr>
        <hr>
        <form id="add_staff" method="post" action="../../controllers/projectActionCode.php" class="row" enctype="multipart/form-data">
            <!-------------Image upload fiels------------>
            <div class="col-md-6 mb-3">
                <label for="staff_name" class="form-label">Project Name:</label>
                <input type="text" id="project_name" name="project_name" pattern="[A-Za-z]{3-35}" required class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" id="description" name="description" required class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="technology" name="tech" class="form-label">Technology Needed:</label><br>
                <input type="Checkbox" name="tech[]" value="javascript">Javascript &nbsp;
                <input type="Checkbox" name="tech[]" value="laravel" checked >Laravel &nbsp;
                <input type="Checkbox" name="tech[]" value="php">PHP &nbsp;
                <input type="Checkbox" name="tech[]" value="python">Python <br>
                <input type="Checkbox" name="tech[]" value="react">React &nbsp;
                <input type="Checkbox" name="tech[]" value="flutter">Flutter &nbsp;
                <input type="Checkbox" name="tech[]" value="mysql" >MySQL &nbsp;
                <input type="Checkbox" name="tech[]" value="c#">C# <br>
                <input type="Checkbox" name="tech[]" value="c++">C++  
            </div>
            <br>
            <div class="col-md-6 mb-3">
                <label for="comments" class="form-label">Comments</label>
                <input type="text" id="comments" name="comments" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" id="duration" name="duration" required class="form-control">
            </div>
            <hr>
            <div class="col-12">
                <button type="submit" id="project_submit" name="project_submit" class="btn btn-primary">Assign New Project</button>
            </div>
        </form>
    </div>

    <!-------bootstrap js--------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA8K4h8S+grcYH8ylOhwm+xbz