// Validating login forms
$(document).ready(function() {

    // Validate Admin Login
    $("#admin_login").submit(function(event) {
      var username = $("#username").val();
      var password = $("#password").val();
      if (username === "" || password === "") {
        alert("Username and password cannot be empty!");
        event.preventDefault(); // Prevent form submission
      }
    });
  
    // Validate Staff Login
    $("#staff_login").submit(function(event) {
      var designation = $("#designation").val();
      var email = $("#email").val();
      if (designation === "" || email === "") {
        alert("Designation and email cannot be empty!");
        event.preventDefault(); // Prevent form submission
      }
    });
  
  });
  