<script>


$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault(); // Prevent form submission

        // Clear existing error message
        $('.error-message').empty();
       

        // Perform image validation
        var valid = true;


//  Validation for the 'restaurant_name' field
var restaurantName = $('#restaurant_name').val();
        if (restaurantName === '') {
            $('#restaurant_name_error').text('Restaurant Name is required.');
            $('#restaurant_name').css('border-color', 'red');
            valid = false;
        } else if (!/^[A-Za-z\s]+$/.test(restaurantName)) {
            $('#restaurant_name_error').text('Restaurant Name can only contain letters and spaces.');
            $('#restaurant_name').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#restaurant_name').css('border-color', 'green');
        }



            // Example validation for the 'email' field
            var email = $('#email').val();
        if (email === '') {
            $('#email_error').text('Email is required.');
            $('#email').css('border-color', 'red');
            valid = false;
        } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
            $('#email_error').text('Please enter a valid email address.');
            $('#email').css('border-color', 'red');
            valid = false;
        } else if (email.length > 255) {
            $('#email_error').text('Email must not exceed 255 characters.');
            $('#email').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#email').css('border-color', 'green');
        }


        //  Validation for the 'mobile_number' field
        var mobileNumber = $('#mobile_number').val();
        if (mobileNumber === '') {
            $('#mobile_number_error').text('Mobile Number is required.');
            $('#mobile_number').css('border-color', 'red');
            valid = false;
        } else if (!$.isNumeric(mobileNumber)) {
            $('#mobile_number_error').text('Mobile Number must be numeric.');
            $('#mobile_number').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#mobile_number').css('border-color', 'green');
        }

        //  Validation for the 'mobile_number' field
        // var mobileNumber = $('#secondary_mobile_number').val();
        // if (mobileNumber === '') {
        //     $('#secondary_mobile_number_error').text('Mobile Number is required.');
        //     valid = false;
        // } else if (!$.isNumeric(mobileNumber)) {
        //     $('#secondary_mobile_number_error').text('Mobile Number must be numeric.');
        //     valid = false;
        // }

        //  Validation for the 'restaurant_logo' field
        var restaurantLogo = $('#restaurant_logo')[0].files[0];
        if (!restaurantLogo) {
            $('#restaurant_logo_error').text('Restaurant Logo is required.');
            $('#restaurant_logo').css('border-color', 'red');
            valid = false;
        }
         else {
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
            if (!allowedExtensions.exec(restaurantLogo.name)) {
                $('#restaurant_logo_error').text('Invalid file type. Only JPG, JPEG, and PNG files are allowed.');
                $('#restaurant_logo').css('border-color', 'red');
                valid = false;
            } else if (restaurantLogo.size > 2048 * 1024) {
                $('#restaurant_logo_error').text('File size exceeds the maximum limit of 2MB.');
                $('#restaurant_logo').css('border-color', 'red');
                valid = false;
            }
            else {
            $('#restaurant_logo').css('border-color', 'green');
            }
        }
        

   //  Validation for the 'restaurant_description' field
   var restaurantDescription = $('#restaurant_description').val();
        if (restaurantDescription.trim() === '') {
            $('#restaurant_description_error').text('Restaurant Description is required.');
            $('#restaurant_description').css('border-color', 'red');
            valid = false;
        } else if (restaurantDescription.length > 10000) {
            $('#restaurant_description_error').text('Restaurant Description should not exceed 1000 characters.');
            $('#restaurant_description').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#restaurant_description').css('border-color', 'green');
        }

   //  Validation for the 'restaurant_website' field
//    var restaurantWebsite = $('#restaurant_website').val();
//         if (restaurantWebsite === '') {
//             $('#restaurant_website_error').text('Restaurant Website is required.');
//             valid = false;
//         } else if (!isValidUrl(restaurantWebsite)) {
//             $('#restaurant_website_error').text('Invalid URL format.');
//             valid = false;
//         }
  // Example validation for the 'restaurant_website' field
  var restaurantWebsite = $('#restaurant_website').val();
        if (restaurantWebsite === '') {
            $('#restaurant_website_error').text('Restaurant Website is required.');
            $('#restaurant_website').css('border-color', 'red');
            valid = false;
        } else if (!/^https?:\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/.test(restaurantWebsite)) {
            $('#restaurant_website_error').text('Please enter a valid URL for the Restaurant Website.');
            $('#restaurant_website').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#restaurant_website').css('border-color', 'green');
        }

  //  Validation for the 'restaurant_address' field
        var restaurantAddress = $('#restaurant_address').val();
        if (restaurantAddress === '') {
            $('#restaurant_address_error').text('Restaurant Address is required.');
            $('#restaurant_address').css('border-color', 'red');
            valid = false;
        } else if (!/^[a-zA-Z0-9\s\-]+$/.test(restaurantAddress)) {
            $('#restaurant_address_error').text('Invalid characters used in the Restaurant Address.');
            $('#restaurant_address').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#restaurant_address').css('border-color', 'green');
        }


  //  Validation for the 'gst_number' field
  var gstNumber = $('#gst_number').val();
        if (gstNumber === '') {
            $('#gst_number_error').text('GST Number is required.');
            $('#gst_number').css('border-color', 'red');
            valid = false;
        } else if (!/^[A-Za-z0-9]+$/.test(gstNumber)) {
            $('#gst_number_error').text('GST Number can only contain letters and numbers.');
            $('#gst_number').css('border-color', 'red');
            valid = false;
        }
        else {
            $('#gst_number').css('border-color', 'green');
        }

        // Submit the form if validation passes
        if (valid) {
            $(this).unbind('submit').submit(); // Unbind the submit event handler and submit the form
        }


//   Function to validate email format
//    function isValidEmail(email) {
//         var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//         return emailPattern.test(email);
//     }

        // Function to validate URL using regex pattern
    // function isValidUrl(url) {
    //     var pattern = /^(https?:\/\/)?([a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,63})(:[0-9]{1,5})?(\/.*)?$/i;
    //     return pattern.test(url);
    // }

         // Click event listener for the submit button
     $('#submitBtn').click(function() {
        $('#myForm').submit(); // Trigger the form submission when the button is clicked
    });

    });

     // Clear button click event handler
     $('#clearButton').click(function() {
        $('#myForm')[0].reset();
    });

    
});

</script>