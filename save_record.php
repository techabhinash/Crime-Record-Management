<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $crimeType = $_POST['crime-type'];
    $location = $_POST['location'];
    $date = $_POST['date'];

    // Create record string
    $record = "Type of Crime: $crimeType, Location: $location, Date: $date\n";

    // Append record to file
    $file = 'crime_records.txt'; // File to store records
    file_put_contents($file, $record, FILE_APPEND | LOCK_EX);

    // Redirect back to the main page
    header("Location: index.html");
    exit();
} else {
    // Redirect to main page if accessed directly
    header("Location: index.html");
    exit();
}
?>
