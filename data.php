<?php
   $serverName = "localhost";
   $userName = "root";/* Naam van de user */
   $password = "";/* Naam van het password */
   $databaseName = "angularcrud";/* Naam van de database */

   $conn = mysqli_connect($serverName, $userName, $password, $databaseName) or die("Database is niet werkzaam");

   $query = "SELECT * FROM `users`";

   $result = mysqli_query($conn, $query);

   $records = mysqli_fetch_all($result, MYSQLI_ASSOC);

   $jsonString = json_encode($records, 1);

   echo $jsonString;
?>