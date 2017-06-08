<?php
   $data = json_decode(file_get_contents("php://input"), true);
   var_dump($data);
   
   $serverName = "localhost";
   $userName = "root";/* Naam van de user */
   $password = "";/* Naam van het password */
   $databaseName = "angularcrud";/* Naam van de database */

   $conn = mysqli_connect($serverName, $userName, $password, $databaseName) or die("Database is niet werkzaam");

   $query = "INSERT INTO `users` (`id`,
                                  `firstname`,
                                  `infix`, 
                                  `lastname`, 
                                  `haircolor`) 
                  VALUES         (NULL, 
                                  '" . $data["firstname"]  ."', 
                                  '" . $data["infix"]  ."', 
                                  '" . $data["lastname"]  ."', 
                                  '" . $data["haircolor"]  ."')";

   $result = mysqli_query($conn, $query);

   //$records = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //$jsonString = json_encode($records, 1);

   //echo $jsonString;
?>