<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/styles/dashboard_style.css">
    <title>Team-Lead-Dashboard | Prog</title>
</head>

<body>

<?php
    include "../../config/connection.php" ;


?>

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
                <a href="../project/project_details.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Project Management</h3>
                </a>
                <a href="project_assign_details.php">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Project Assignment</h3>
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
            <h1>Team-Lead-Dashboard</h1>

            <br><br><br>
                <h3> Welcome Team Lead To your Dashboard </h3>

                <br><br>
                <p> Please select an option from the side bar</p>



            <!-- Analyses -->
            <!-- <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Project Count</h3>
                            <h1>$65,024</h1>
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
                            <h1>24,981</h1>
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
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End of Analyses -->

            </div>

        </div>


    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>