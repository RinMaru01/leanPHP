<?php require 'includes/header.php' ?>

<div class="container"> 
    <form>
    <div class="mb-3">
        <label for="exampleInputFirstName1" class="form-label">First Name</label>
        <input type="firstname" class="form-control" id="exampleInputFirstName1" placeholder="First Name">
    </div><div class="mb-3">
        <label for="exampleInputLastName1" class="form-label">Last Name</label>
        <input type="lastname" class="form-control" id="exampleInputLastName1" placeholder="Last Name">
    </div>
    <div class="mb-3">
        <label for="exampleInputDateOfBirth1" class="form-label">Date of Birth</label>
        <!-- <label for="datepicker"></label> -->
        <input type="text" id="datepicker" class="form-control" type="text" placeholder="mm/dd/yyyy">
    </div>
    <!-- <p>Date: <input type="text" id="datepicker"></p> -->
    <div class="mb-3">
        <label for="exampleInputSpecialty" class="form-label">Specialty</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Specialty</option>
        <option value="1">Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
    </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <label for="exampleInputContact1" class="form-label">Contact Number</label>
        <input type="contact" class="form-control" id="exampleInputContact1" placeholder="Enter Contact Number">
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

 
<?php require 'includes/footer.php' ?>
