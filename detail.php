<?php
require_once "include/header.php";
require_once "db/conn.php";
    
    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id=:id";
    
    $sql = $pdo->prepare($query);

    $sql->bindParam(':id', $id);    

     $sql->execute();
    
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    
       
       echo "<div class='card mx-auto mt-5' style='width: 18rem;'>
        <div class='card-header'>
          ".$result["firstname"]." ".$result["lastname"]."
        </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>Email : ".$result["email"]."</li>
                    <li class='list-group-item'>DOB : ".$result["dob"]." </li>
                    <li class=\"list-group-item\">Gender : ".$result["gender"]." </li>
                </ul>
        </div>";       
    
  ?>


