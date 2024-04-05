<?php
    require_once '../config/connection.php';

    session_start();

    //For showing errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST['project_submit'])){
        $project_name = $_POST["project_name"];
        $description = $_POST["description"];
        $tech = $_POST['tech'];
        $duration = $_POST["duration"];

        $tech_str = implode(",", $tech);

    // foreach($tech_involved as $tech){}
       
        
    
    
        $sql = "INSERT INTO new_project (project_name, description, tech_involved, duration) VALUES (?, ?, ?, ?)";
        $conn->prepare($sql)->execute([$project_name, $description, $tech_str,  $duration]);

    
        echo '<script>alert("Entry added to register successfully")</script>'; 
        echo "<script>window.location=(\"../view/project/project_details.php \")</script>";
    
    }


    // Update function

    echo $id = $_GET['id'];

    if (isset($_POST['project_update_btn'])) {
        $project_name = $_POST['project_name'];
        $description = $_POST['description'];
        $tech_involved = $_POST['tech_involved'];
        $duration = $_POST['duration'];
    
        try {
            $query = "UPDATE `new_project` SET `project_name`=:project_name, `description`=:description, `tech_involved`=:tech_involved, `duration`=:duration WHERE `project_id`=:id";
            $statement = $conn->prepare($query);
    
            $statement->bindParam(':project_name', $project_name);
            $statement->bindParam(':description', $description);
            $statement->bindParam(':tech_involved', $tech_involved);
            $statement->bindParam(':duration', $duration);
            $statement->bindParam(':id', $id);
    
            $query_execute = $statement->execute();
    
            if ($query_execute) {
                echo '<script>alert("Entry updated successfully")</script>';
                echo "<script>window.location=(\"../view/project/project_details.php\")</script>";
                exit(0);
            } else {
                echo "not updated";
                echo "<script>window.location=(\"../view/admin/edit_staff.php\")</script>";
                exit(0);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    


?>