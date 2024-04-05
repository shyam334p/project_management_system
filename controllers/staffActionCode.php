<?php
require_once '../config/connection.php';

session_start();

//For showing errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// insert function
//if submit button is pressed
if (isset($_POST['project_assign_submit'])){
    $project_name = $_POST["project_name"];
    $staff_name = $_POST["staff_name"];
    $designation = $_POST["designation"];
    $task = $_POST["task"];
    $comments = $_POST["comments"];
    $due_date = $_POST["due_date"];


    $sql = "INSERT INTO projects (project_name, staff_name, designation, task, comments, due_date) VALUES (?, ?, ?, ?, ?, ?)";
    $conn->prepare($sql)->execute([$project_name, $staff_name, $designation, $task, $comments, $due_date]);

    echo '<script>alert("Entry added to register successfully")</script>'; 
    echo "<script>window.location=(\"../view/staff/team_lead_dashboard.php \")</script>";

}




//Update Function for project assign

echo $id = $_GET['id'];


if (isset($_POST['assign_update_btn'])){
    $project_name = $_POST['project_name'];
    $staff_name = $_POST['staff_name'];
    $designation = $_POST['designation'];
    $task = $_POST['task'];
    $comments = $_POST['comments'];
    $due_date = $_POST['due_date'];


    try{
        $query = "UPDATE projects SET project_name=:project_name, staff_name=:staff_name, designation=:designation, task=:task, comments=:comments, due_date=:due_date WHERE assign_id='$id' ";
        $statement = $conn->prepare($query);

        $data=[
            ':project_name' => $project_name,
            ':staff_name' => $staff_name,
            ':designation' => $designation,
            ':task' => $task,
            ':comments' => $comments,
            ':due_date' => $due_date

        ];

        $query_execute = $statement->execute($data);

        if($query_execute){
            echo '<script>alert("Entry updated successfully")</script>'; 
            echo "<script>window.location=(\"../view/staff/project_assign_details.php\")</script>";
            exit(0);
        }
        else{
           echo "not updated";
            echo "<script>window.location=(\"../view/admin/edit_staff.php\")</script>";
            exit(0);


        }

        
    }catch(PDOException $e)

    {
            echo $e->getMessage();
    }



}




?>