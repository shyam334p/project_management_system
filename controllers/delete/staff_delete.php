<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


include("../../config/connection.php");
$id = $_POST["staff_id"];
if(isset($_POST['staff_id'])) {
    try {
        // Prepare SQL statement to delete the invoice from the database
        $stmt = $conn->prepare("DELETE FROM staff_details WHERE staff_id = :staff_id");
        // Bind parameters
        $stmt->bindParam(':staff_id', $_POST['staff_id']);
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