<?php
    $servername = "localhost";
    $username = "roof";
    $password = "";
    $dbname = "flyfrew";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $itemName = $_POST['itemName'];
    $options = $_POST['option'];

    // Insert the item into the items table
    $sql = "INSERT INTO items (name) VALUES ('$itemName')";
    if ($conn->query($sql) === TRUE) {
        $itemId = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert the options into the options table
    foreach ($options as $option) {
        $sql = "INSERT INTO options (item_id, name) VALUES ($itemId, '$option')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
