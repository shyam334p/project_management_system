<?php
require_once('connection.php'); // Include connection details

// Function to validate admin login (using username)
function validateAdminLogin($conn, $username, $password) {
  $sql = "SELECT * FROM admins WHERE username = :username";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":username", $username);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user["password"])) {
    // Login successful!
    return $user;
  } else {
    // Login failed
    return false;
  }
}

// Function to validate staff login (using designation and email)
function validateStaffLogin($conn, $designation, $email, $password) {
  $sql = "SELECT * FROM staffs WHERE designation = :designation AND email = :email";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":designation", $designation);
  $stmt->bindParam(":email", $email);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user["password"])) {
    // Login successful!
    return $user;
  } else {
    // Login failed
    return false;
  }
}

// Get login details from the form
$designation = isset($_POST["designation"]) ? $_POST["designation"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$username = isset($_POST["username"]) ? $_POST["username"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;

// Establish database connection
$conn = connectToDatabase(); // Call function from config.php

// Validate login based on submitted data
if ($username !== null) {
  $user = validateAdminLogin($conn, $username, $password);
} else if ($designation !== null && $email !== null) {
  $user = validateStaffLogin($conn, $designation, $email, $password);
} else {
  // Invalid login attempt (no username or designation/email)
  $user = false;
}

if ($user) {
  // Login successful! Start a session and redirect to appropriate dashboard
  session_start();
  $_SESSION["user"] = $user;

  if ($user["role"] === "Super Admin") {
    header("Location: admin_dashboard.php");
  } else if ($user["role"] === "Team Lead") {
    header("Location: team_lead_dashboard.php");
  } else {
    // Handle invalid user role
    echo "Invalid user role!";
  }
  exit();
} else {
  // Login failed! Display error message
  echo "Invalid login credentials!";
}

// Close connection (optional, handled by PDO in some cases)
$conn = null;
?>
