<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/styles/dashboard_style.css">
    <title>Admin-Dashboard | Prog</title>
</head>
<?php
    include "../../config/connection.php";


    //Project count
    $stmt = $conn->prepare("SELECT COUNT(*) AS project_name FROM new_project");
    $stmt->execute();
    $project_count = $stmt->fetch(PDO::FETCH_ASSOC)['project_name'];

    //staff count
    $stmt = $conn->prepare("SELECT COUNT(*) AS staff_name FROM staff_details");
    $stmt ->execute();
    $staff_count = $stmt->fetch(PDO::FETCH_ASSOC)['staff_name'];

    //Team Lead Count
    $stmt = $conn->prepare("SELECT COUNT(*) AS team_lead_count FROM staff_details WHERE designation = 'team_lead' ");
    $stmt ->execute();
    $team_lead_count = $stmt->fetch(PDO::FETCH_ASSOC)['team_lead_count'];

?>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>Asmr<span class="danger">Prog</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="staff_details.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>staff management</h3>
                </a>
                <a href="../../controllers/logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Admin-Dashboard</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Project Count</h3>
                            <h1><?php echo $project_count ?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Team Lead Count</h3>
                            <h1><?php echo $team_lead_count ?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Team Members Count</h3>
                            <h1><?php echo $staff_count ?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->
            </div>

        </div>


    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>