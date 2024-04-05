
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
include ("../config/connection.php");



// admin login

if(isset($_POST["admin_login_btn"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo $password;

    $query = "SELECT * FROM admins WHERE email = :email AND password = :password";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'    => $_POST["email"],  
                          'password' => $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:../view/admin/admin_dashboard.php");  
                }  
                {  
                    echo "<script>window.location=(\"../view/index.php \")</script>";
                    echo '<script type ="text/JavaScript">';  
                         echo 'alert(" Data Entered is Wrong !!!! ")';  
                    echo '</script>';  
                }  
    
}

// staff login

if(isset($_POST["staff_login_btn"])){
    $email = $_POST["email"];
    $designation = $_POST["designation"];

    $query = "SELECT * FROM staff_details WHERE mail_id = :email AND designation = :designation";  
                $statement = $conn->prepare($query);  
               if( $statement->execute(  
                     array(  
                          'email'    => $_POST["email"],  
                          'designation' => $_POST["designation"]  
                     )  
                )) {
                    if($designation == "team_lead"){
                    header("location:../view/staff/team_lead_dashboard.php");}  
                }

                $count = $statement->rowCount();  
                if($count > 0)  

                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:../view/staff/team_lead_dashboard.php");  
                }  
                else  
                {  
                    echo "<script>window.location=(\"../view/index.php \")</script>";
                    echo '<script type ="text/JavaScript">';  
                         echo 'alert(" Data Entered is Wrong !!!! ")';  
                    echo '</script>';  
                }  
    
}

?>