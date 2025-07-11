<?php
// Set content type as JSON
header('Content-Type: application/json');
$conn = mysqli_connect('localhost','dopluserp_business','business@123','dopluserp_business'); 

$company_id=1;
$company = 'DBERP-1111';

// Check if the form data is received via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize response array
    $response = [
        'status' => 'error',
        'message' => 'Something went wrong. Please try again.'
    ];
    
    // Ensure the necessary fields are provided in the form
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['phone'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars($_POST['message']);
        $phone = htmlspecialchars($_POST['phone']);
        // You can validate and process the data here (e.g., send email, store data in a database, etc.)

        // Example: Send email
        $to = "support@doplus.in"; // Replace with your email
        $subject = "Website Lead " . $name;
        $body = "Name: $name\nMobile: $phone\nEmail: $email\nMessage:$message";
        $headers = "From: $email";
        
     
        
        
        

        if (mail($to, $subject, $body, $headers)) {
            $response = [
                'status' => 'success',
                'message' => 'Your enquiry has been sent successfully!'
            ];
        } else {
            $response['message'] = 'Failed to send the enquiry email.';
        }
    } 
    else {
        $response['message'] = 'Missing required fields.';
    }

    // Return JSON response
    echo json_encode($response);
}
?>















