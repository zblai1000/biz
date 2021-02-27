<?php
// This code uses MySQLi in a procedural manner to create a table in your
//database.
$servername = "127.0.0.1";
$username = "root"; // Default: "root"
$password = ""; // Leave blank or set to NULL
$dbname = "biz"; // The name of the database you want to
//connect to

// Create connection TO A SPECIFIC DATABASE (notice the additional
//$dbname at the end)
$handler = mysqli_connect($servername, $username, $password, $dbname);


if (!$handler) 
    {
    die("Connection failed: " . mysqli_connect_error());
    } 
    else 
    {
 echo "Connected successfully";
    }

// SQL query to create table

$usersTable = "CREATE TABLE users(
            id INT not null primary key auto_increment,
            username VARCHAR(30) NOT NULL,
            pass CHAR(40) NOT NULL,
            registration_date DATETIME DEFAULT CURRENT_TIMESTAMP)";

$itemsTable = "CREATE TABLE items(
            id INT not null primary key auto_increment,
            itemName VARCHAR(100) NOT NULL, 
            code VARCHAR(100) NOT NULL,
            info VARCHAR(1000) NOT NULL,
            picture TEXT,
            business VARCHAR(100) NOT NULL,
            registration_date DATETIME DEFAULT CURRENT_TIMESTAMP)";

$businessTable = "CREATE TABLE business(
                id INT not null primary key auto_increment,
                username VARCHAR(30) NOT NULL,
                pass CHAR(40) NOT NULL,
                link VARCHAR(1000) NOT NULL,
                picture TEXT NOT NULL,
                registration_date DATETIME DEFAULT CURRENT_TIMESTAMP)";

$blogsTable = "CREATE TABLE blogs(
    id INT not null primary key auto_increment,
    title VARCHAR(100) NOT NULL,
    link VARCHAR(3000) NOT NULL,
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP)";






// Executing the SQL query using the connection handler
mysqli_query($handler, $usersTable);
mysqli_query($handler, $itemsTable);
mysqli_query($handler, $businessTable);
mysqli_query($handler, $blogsTable);




?>