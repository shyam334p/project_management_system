<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System - Team Lead Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="login_validation.js"></script>  </head>
<body>
    <div class="container mt-5">
        <h1>Team Lead Login</h1>
        <form id="staff_login" action="login_process.php" method="post" class="row">
            <div class="col-md-6 mb-3">
                <label for="designation" class="form-label">Designation:</label>
                <select name="designation" id="designation" class="form-select" required>
                    <option value="">Select Designation</option>
                    <option value="Team Lead">Team Lead</option>
                    <option value="Snr Developer">Senior Developer</option>
                    <option value="Jnr Developer">Junior Developer</option>
                    <option value="Tester">Tester</option>
                    <option value="Designer">Designer</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit"  class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
