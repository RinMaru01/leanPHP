<?php
  $title = 'Index';
  require_once 'includes/header.php';
?>

<!--
    -first name
    -last name
    -date of birth(use datepicker)
    -specialty
    -email address
    -contact number
     
-->
<?php require_once 'includes/header.php' ?>
<h1 style="text-align: center";>REGISTRATION FORM</h1>
<div class="container"> 

    <form  method="POST" action="action_page.php">

    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
    </div>
    <div class="mb-3">
        <label for="exampleInputLastName1" class="form-label">Last Name</label>
        <input type="lastname" class="form-control" id="lname" placeholder="Last Name" name="lname">
    </div>
    <div class="mb-3">
        <!-- <label for="datepicker"></label> -->
        <label for="birthdate" class="form-label">Date of Birth</label>
        <input type="datepicker" class="form-control" id="datepicker" placeholder="mm/dd/yyyy" name="birthdate" id="birthdate">

    <!-- <p>Date: <input type="text" id="datepicker"></p> -->
    <div class="mb-3">
        <label for="exampleInputSpecialty" class="form-label">Specialty</label>
        <select class="form-select" aria-label="Default select example" name="jobs" id="jobs">
            <option selected disabled value="0">Specialty</option>
            <option value="1">Database Admin</option>
            <option value="2">Software Developer</option>
            <option value="3">Web Administrator</option>
        </select>
    </div>      

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
    </div>

    <div class="mb-3">
        <label for="exampleInputContact1" class="form-label">Contact Number</label>
        <input type="contact" class="form-control" id="contactNumber" placeholder="Enter Contact Number" name="contactnum">
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
 
<?php require_once 'includes/footer.php' ?>

