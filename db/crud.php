<?php
class crud
{
  //private database object
  private $db;


  //constructor to initialize db object to db connection
  function __construct($conn)
  {
    $this->db = $conn;
  }


  function insert($fname, $lname, $email, $dob, $gender)
  {
    try {
      //define sql statement to be executed
      $sql =
        "insert into students (firstname,lastname,email,dob,gender) values(:fname,:lname,:email,:dob,:gender)";


      //prepare the sql statement for execution
      $stmt = $this->db->prepare($sql);


      //bind all placeholders to the actual values
      $stmt->bindparam(":fname", $fname);
      $stmt->bindparam(":lname", $lname);
      $stmt->bindparam(":email", $email);
      $stmt->bindparam(":dob", $dob);
      $stmt->bindparam(":gender", $gender);


      //execute statement
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}


?>
