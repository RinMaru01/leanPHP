<?php require_once 'includes/header.php' ?>

<h1 style="text-align: center";>YOU HAVE BEEN REGISTERED</h1>

<?php 
    // echo $_GET['firstname'];

    // echo $_GET['lname'];
    // echo $_GET['birthdate'];
    // echo $_GET['jobs'];
    // echo $_GET['email'];


?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
     <h6 class="card-subtitle mb-2 text-body-secondary">REGISTERED</h6>
            <?php 
            echo 'My name is'   .$_GET['firstname'];

            echo $_GET['lname'];
            echo $_GET['birthdate'];
            echo $_GET['jobs'];
            echo $_GET['email'];
            ?>

    <button type="submit" class="btn btn-primary">CONFIRM</button>
   
  </div>
</div>


<?php require_once 'includes/footer.php' ?>