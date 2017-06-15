<?php
   $data = json_decode(file_get_contents("php://input"), true);
    
   $serverName = "localhost";
   $userName = "root";/* Naam van de user */
   $password = "";/* Naam van het password */
   $databaseName = "angularcrud";/* Naam van de database */

   $conn = mysqli_connect($serverName, $userName, $password, $databaseName) or die("Database is niet werkzaam");

   $query = "INSERT INTO `users` (`id`,
                                  `firstname`,
                                  `infix`, 
                                  `lastname`) 
                  VALUES         (NULL, 
                                  '" . $data["firstname"]  ."', 
                                  '" . $data["infix"]  ."', 
                                  '" . $data["lastname"]  ."')";

   $result = mysqli_query($conn, $query);

   if ($result) {
      echo "Het opslaan is gelukt";
   } else {
      echo "Er is een database error! Opslaan is niet gelukt";
   }
?>