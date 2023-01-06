<?php

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'flyfrew');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$company = mysqli_real_escape_string($conn, $_POST['company']);
$extra_details = mysqli_real_escape_string($conn, $_POST['extra_details']);
$options = $_POST['options'];

// Build the options string
$options_str = implode(',', $options);

// Create the query
$query = "INSERT INTO contacts (first_name, last_name, company, extra_details, options) VALUES ('$first_name', '$last_name', '$company', '$extra_details', '$options_str')";

// Run the query
if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>