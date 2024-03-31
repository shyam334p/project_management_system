<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/styles/login_style.css">
    <title>Project Management System - Admin Login</title>
    
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Add Bootstrap JS -->
    <scrip src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-----js scripts------->
    <script src="../dist/js/jquery-3.7.1.js"></script>
    <script src="../dist/js/script.js"></script> 

</head>

<body>
    <div class="container mt-5">
        <h1>Super Admin Login</h1>
        <form id="admin_login" action="login_process.php" method="post" class="row">
            <div class="col-md-6 mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" >
            </div>
            <div class="col-12">
                <button type="admin_submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
