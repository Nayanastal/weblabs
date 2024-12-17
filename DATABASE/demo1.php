<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connection successful";  // Corrected: Use echo for success message
    }

    // SQL to create table
    $sql = "CREATE TABLE myGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($connection->query($sql) === TRUE) {
        echo "Table myGuests created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }
	$ins="INSERT INTO
	MyGuests(first_name,last_name,email)values('Nayana','U','9listal@gmail.com')";
	if ($connection->query($ins)===TRUE){
		echo "values inserted successfully";
	}

    // Close connection
    $connection->close();
?>