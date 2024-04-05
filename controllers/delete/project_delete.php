<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("../../config/connection.php");
$id = $_POST["project_id"];
if(isset($_POST['project_id'])) {
    try {
        // Prepare SQL statement to delete the invoice from the database
        $stmt = $conn->prepare("DELETE FROM new_project WHERE project_id = :project_id");
        // Bind parameters
        $stmt->bindParam(':project_id', $_POST['project_id']);
        // Execute the statement
        $stmt->execute();

        echo "deleted successfully!";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
} else {
    echo "ID not provided!";
}

?>