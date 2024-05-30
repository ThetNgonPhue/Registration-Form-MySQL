<?php   
    
require_once "include/header.php";
require_once "db/conn.php";

?>
<form class="mx-auto" style="width: 600px;" action="nextpage.php" method="post">

     <h1 class="text-center mb-4">Registeration Form</h1>

    <div class="mb-4">
        <label  class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control"  placeholder="enter your first name...">
    </div>

    <div class="mb-4">
        <label  class="form-label">Last Name</label>
        <input type="text" name="lastname"  class="form-control"  placeholder="enter your last name...">
    </div>

    <div class="mb-4">
        <label  class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control"  placeholder="enter your email address...">
    </div>

    <div class="mb-4">
        <label  class="form-label">DOB</label>
        <input id="datepicker" name="dob"  class="form-control" placeholder="dd/mm/yyyy"/>        
    </div>

    <div class="mb-4">
        <label  class="form-label">Gender</label>
        <select class="form-select" name="gender" >
            <option selected>Male</option>
            <option>Female</option>  
        </select>
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" name="submit">Submit</button>
    </div>

     
    </form>
    
    <?php
require_once "include/footer.php";

?>