<?php
   $data = json_decode(file_get_contents("php://input"), true);
    
   $serverName = "localhost";
   $userName = "root";/* Naam van de user */
   $password = "";/* Naam van het password */
   $databaseName = "angularcrud";/* Naam van de database */

   $conn = mysqli_connect($serverName, $userName, $password, $databaseName) or die("Database is niet werkzaam");

   $query = "DELETE FROM `users` WHERE `id` = " . $data["id"];

   $result = mysqli_query($conn, $query);
?>