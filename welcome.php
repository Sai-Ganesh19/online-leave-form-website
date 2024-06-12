
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employeeName = $_POST["StudentName"];
    $leaveType = $_POST["leaveType"];
    $numberOfDays = $_POST["numberOfDays"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $reason = $_POST["reason"];

    // Process the data (You can customize this part based on your application logic)
    // For now, let's just print the data
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leave Application Details</title>
        <style>
            body {
                background-image: url('backtemplate.jpg'); /* Add the path to your background image */
                background-size: cover;
                font-family: Arial, sans-serif;
                color: #ffffff; /* Text color on the background */
                margin: 0;
                padding: 20px;
            }

            h2 {
                text-align: center;
            }

            p {
                margin-bottom: 10px;
            }

            strong {
                color: #ffcc00; /* Color for strong/bold text */
            }
        </style>
    </head>
    <body>
        <h2>Leave Application Details</h2>
        <p><strong>Student Name:</strong> <?php echo $employeeName; ?></p>
        <p><strong>Leave Type:</strong> <?php echo $leaveType; ?></p>
        <p><strong>Number of Days:</strong> <?php echo $numberOfDays; ?></p>
        <p><strong>Start Date:</strong> <?php echo $startDate; ?></p>
        <p><strong>End Date:</strong> <?php echo $endDate; ?></p>
        <p><strong>Reason for Leave:</strong> <?php echo $reason; ?></p>
    </body>
    </html>
    <?php
} else {
    header("Location: jeeva.html");
    exit();
}
?>




