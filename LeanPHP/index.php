<?php require 'includes/header.php' ?>

<!-- <h1>Hello, world!</h1> -->

<!-- User Information Input  -->
<!-- <div class="personal-info">
         
        <form class="row g-3" style="width:50%; margin:auto;">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
             </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            </div>   
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
        </form>
</div> -->
<!-- <div>
    <h1>Registration Form</h1>
</div> -->
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
        <label for="startDate"></label>
        <input id="startDate" class="form-control" type="date" />
    </div>
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