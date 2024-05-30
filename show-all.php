<?php
require_once "include/header.php";
require_once "db/conn.php";
?>
<table class ="table mx-auto mt-5" style="width: 600px;">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM students";
    $sql = $pdo->prepare($query);
    $sql->execute();


    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
      while($row = $sql->fetch()) {
        ?>
          <tr>      
              <td><?= $row['firstname']; ?></td>
              <td><?= $row['lastname']; ?></td>              
              <td>
              <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-primary">View</a>
              </td>
            </tr>
        <?php
      } 
      
    ?>
    
    
  </tbody>
</table>