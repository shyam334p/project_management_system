<?php
    require_once '../config/connection.php';

    session_start();

    //For showing errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // insert function

    // target directory to move staff images into
    $targetDir = "../dist/uploads/" ;


    //if submit button is pressed
    if (isset($_POST['staff_submit'])){
        $staff_name = $_POST["staff_name"];
        $mail_id = $_POST["mail_id"];
        $designation = $_POST["designation"];

        //image uploading
        $staff_image = basename($_FILES['staff_image']['name']); 
        $targetFilePath = $targetDir . $staff_image; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

        // To move Uploaded file
        move_uploaded_file($_FILES["staff_image"]["tmp_name"], $targetFilePath);

        $sql = "INSERT INTO staff_details (staff_name, mail_id, designation, staff_image) VALUES (?, ?, ?, ?)";
        $conn->prepare($sql)->execute([$staff_name, $mail_id, $designation, $staff_image]);

        echo '<script>alert("Entry added to register successfully")</script>'; 
        echo "<script>window.location=(\"../view/admin/staff_details.php \")</script>";

    }

    
    
    //Update Function

    echo $id = $_GET['id'];

    if (isset($_POST['submit_update_btn'])){
        $staff_name = $_POST['staff_name'];
        $mail_id = $_POST['mail_id'];
        $designation = $_POST['designation'];


        try{
            $query = "UPDATE staff_details SET staff_name=:staff_name, mail_id=:mail_id, designation=:designation WHERE staff_id='$id' ";
            $statement = $conn->prepare($query);

            $data=[
                ':staff_name' => $staff_name,
                ':mail_id' => $mail_id,
                ':designation' => $designation,

            ];

            $query_execute = $statement->execute($data);

            if($query_execute){
                echo '<script>alert("Entry updated successfully")</script>'; 
                echo "<script>window.location=(\"../view/admin/staff_details.php\")</script>";
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


    
    
    // Delete Function

    // $id = $_GET['id'];

    // $sql = "DELETE FROM staff_details WHERE staff_id=?";
    // $statement = $conn->prepare($sql);
    // $statement ->execute([$id]);

    // if($sql){
    //     echo '<script>alert("Entry deleted successfully")</script>'; 
    //     echo "<script>window.location=(\"../view/admin/staff_details.php\")</script>";
    //     exit(0);
    // }
    // else{
    //     echo '<script>alert("Entry Not deleted, Sorry!")</script>'; 
    //     echo "<script>window.location=(\"../view/admin/staff_details.php\")</script>";
    //     exit(0);
    // }




    $conn = null;

?>