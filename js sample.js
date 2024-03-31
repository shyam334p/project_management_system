$(document).ready(function() {
    $('#staff_login').submit(function(e) {
      e.preventDefault();
      var form = $(this);
      // Reset previous error messages
      form.find('.form-group').removeClass('has-error');
      form.find('.help-block').remove();
  
      // Check if all fields are filled
      form.find('.form-control').each(function() {
        if ($(this).val() === '') {
          $(this).closest('.form-group').addClass('has-error');
          $(this).after('<span class="help-block">This field is required</span>');
        }
      });
  
      // Check if email is valid
      var email = $('#email').val();
      if (email !== '') {
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
          $('#email').closest('.form-group').addClass('has-error');
          $('#email').after('<span class="help-block">Please enter a valid email address</span>');
        }
      }
  
      // If no errors, submit form
      if (form.find('.has-error').length === 0) {
        form.submit();
      }
    });
  });