<?php require_once 'includes/header.php' ?>

<h1 style="text-align: center";>YOU HAVE BEEN REGISTERED</h1>

<?php 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lname'];
    $birthdate = $_POST['birthdate'];
    $jobs = $_POST['jobs'];
    $email = $_POST['email'];


?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
     <h6 class="card-subtitle mb-2 text-body-secondary">REGISTERED</h6>
        <?php
            echo "Name: $firstname $lastname <br>
            Birthdate: $birthdate <br>
            Job: $jobs<br>
            Email: $email<br>";
        ?>

    <button type="submit" class="btn btn-primary">CONFIRM</button>

  </div>
</div>


<?php require_once 'includes/footer.php' ?>