// Validating login forms
$(document).ready(function() {

    // Validate Admin Login
    $("#admin_login").submit(function(event) {
      var email = $("#email").val();
      var password = $("#password").val();
      if (email === "" || password === "") {
        alert("Email and Password cannot be empty!");
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



  //Add staff form validation

  $(document).ready(function() {

    // Validation rules (same as before)
    var validationRules = {
      staff_name: {
        required: true,
        pattern: /^[A-Za-z\s]{3,35}$/ // Allow spaces for full names
      },
      mail_id: {
        required: true,
        email: true
      },
      designation: { // Add designation validation rule
        required: true
      }
    };

    // add_staff.php form validation
    $("#add_staff").submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      var isValid = true;
      $(".error-message").text(""); // Clear previous error messages
      $(".form-control").removeClass("is-invalid"); // Remove previous invalid class
  
      for (var field in validationRules) {
        var input = $("#" + field);
  
        if (!validationRules[field] || !input.val()) { // Check for both required and empty value
          isValid = false;
          input.addClass("is-invalid");
          var message = "This field is required.";
  
          if (field === "mail_id") {
            message = "Please enter a valid email address.";
          }
  
          input.next(".error-message").text(message);
        }
      }
  
      if (isValid) {
        
        $(this).unbind('submit').submit(); 
      }
    });
  });

  // new project.php form validation

  $(document).ready(function() {

    // Validation rules (same as before)
    var validationRules = {
      project_name: {
        required: true,
        pattern: /^[A-Za-z\s]{3,35}$/ // Allow spaces for full names
      },

      description: {
        required: true,
      },

      duration: {
        required: true,
      }
  
    };
    
    // add_staff.php form validation
    $("#new_project").submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      var isValid = true;
      $(".error-message").text(""); // Clear previous error messages
      $(".form-control").removeClass("is-invalid"); // Remove previous invalid class
  
      for (var field in validationRules) {
        var input = $("#" + field);
  
        if (!validationRules[field] || !input.val()) { // Check for both required and empty value
          isValid = false;
          input.addClass("is-invalid");
          var message = "This field is required.";
  
          // if (field === "mail_id") {
          //   message = "Please enter a valid email address.";
          // }
  
          input.next(".error-message").text(message);
        }
      }
  
      if (isValid) {
        
        $(this).unbind('submit').submit(); 
      }
    });
  });
  