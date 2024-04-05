// $(document).ready(function() {
//     $('#delete-staff-button').click(function(event) {
//       event.preventDefault(); // Prevent default form submission behavior
  
//       var staffId = $(this).data('staff-id'); // Get staff ID from button data attribute
  
//       $.ajax({
//         url: 'staff_details.php', //URL to your delete script
//         type: 'POST',
//         data: { staff_id: staffId }, // Send staff ID as POST data
//         success: function(response) {
//           if (response === 'success') {
//             // Successfully deleted
//             $('#staff-row-' + staffId).fadeOut('slow', function() {
//               $(this).remove(); // Remove the deleted staff row after fade-out animation
//             });
//             // Optionally display a success message (without a page refresh)
//             $('#success-message').text('Entry deleted successfully').fadeIn('slow');
//             $('#success-message').delay(3000).fadeOut('slow'); // Hide message after 3 seconds
//           } else {
//             // Deletion failed
//             alert('Entry Not deleted, Sorry!'); // Consider using a more user-friendly error display (e.g., modal)
//           }
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//           // Handle AJAX errors (e.g., network issues, server errors)
//           console.error('AJAX Error:', textStatus, errorThrown);
//           alert('An error occurred. Please try again later.'); // Inform user about the error
//         }
//       });
//     });
//   });



// delete function







  