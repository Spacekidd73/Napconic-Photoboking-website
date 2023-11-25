$(document).ready(function() {
    $("#calendar").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function(date) {
            $("#date").val(date);
        }
    });

    $("#bookingForm").submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        
        // Add your PHP backend URL below
        var backendURL = 'process_booking.php';

        $.ajax({
            type: 'POST',
            url: backendURL,
            data: formData,
            success: function(response) {
                alert(response);
                // You can redirect or perform other actions after successful booking
            },
            error: function(error) {
                alert("Error: " + error);
            }
        });
    });
});
