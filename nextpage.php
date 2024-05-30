<?php
require_once "include/header.php";
require_once "db/conn.php";


//check if the variables exist
if (isset($_POST["submit"])) {
  //extract values from $_POST
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $name = $_POST["firstname"] . " " . $_POST["lastname"];
  
  //Convert date from dd/mm/yyyy to yyyy-mm-dd for MySQL storage
  
  // $dateArray= explode('/', $dob );
  // if(count($dateArray)== 3){
  // $formattedDate = $dateArray[2] . '-' . $dateArray[1] . '-' . $dateArray[0];
  // }else{
  //   echo "invalid";
  // }
  
  
  //calling insert function to insert the values and track if success or not.
  $isSuccess = $crud->insert($fname, $lname, $email, $dob, $gender);


  if ($isSuccess) {
    echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
    Record Inserted!!!
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>";
  } else {
    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
    Record Insertion Failed!!!
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>";
  }
}


$card = "<div class=\"card mx-auto\" style=\"width: 18rem;\">
            <div class=\"card-header\">
                $name
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Email : $email</li>
                <li class=\"list-group-item\">DOB : $dob</li>
                <li class=\"list-group-item\">Gender : $gender</li>
            </ul>
        </div>";


echo $card;


include "include/footer.php"; ?>


