<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "form"; // Replace with your actual database name
$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$relationship = $_POST['Relationship'] ?? '';
$gender = $_POST['gender'] ?? '';
$food = $_POST['food'] ?? '';
$drink = $_POST['drink'] ?? '';
$movie = $_POST['movie'] ?? '';
$hate = $_POST['hate'] ?? '';
$love = $_POST['love'] ?? '';
$message = $_POST['message'] ?? '';

$sql = "INSERT INTO `funform` (`firstName`, `lastName`, `email`, `relationship`, `gender`, `food`, `drink`, `movie`, `hate`, `love`, `message`) VALUES ('$firstName', '$lastName', '$email', '$relationship', '$gender', '$food', '$drink', '$movie', '$hate', '$love', '$message')";

if (mysqli_query($con, $sql)) {
   
} else {
    echo "Error inserting data: " . mysqli_error($con);
}

mysqli_close($con);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrao Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  

  <body style="background-color: var(--bs-info-bg-subtle)">


  
  <!-- As a heading -->
  <nav class="navbar  bg-info bg-gradient ">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-light text-center text-uppercase">Form For Fun</span>
    </div>
  </nav>

  <div class="container mt-2">
    <form action="index.php" method="post">
    <div class="input-group">
        
        <input type="text" aria-label="First name" class="form-control rounded-4" placeholder="First Name" name="firstName">
        <input type="text" aria-label="Last name" class="form-control rounded-4" placeholder="Last Name" name="lastName">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control rounded-4" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
      </div>
      
      <select class="form-select mb-3 rounded-4" aria-label="Default select example" name="Relationship">
        <option selected>Relationship</option>
        <option disabled value="">Friend</option>
        <option disabled value="">Best Friend</option>
        <option value="I am the one">I am the one</option>
      </select>
      <div class="form-check-inline">
        <input class="form-check-input rounded-4" type="radio"  id="flexRadioDefault1" name="gender" value="male">
        <label class="form-check-label" for="flexRadioDefault1">
       Male
        </label>
      </div>
      <div class="form-check-inline">
        <input class="form-check-input rounded-4" type="radio" name="gender" value="female" id="flexRadioDefault2" checked  >
        <label class="form-check-label" for="flexRadioDefault2">
       Female
        </label>
      </div>
      <div class="input-group input-group-sm mb-3 mt-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">
            favourite Food</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="food">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">
            favourite Soft Drink</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="drink">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">
            favourite Movie</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="movie">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">
          name one thing that you hate most about Nisar</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="hate">
      </div>
      <div class="input-group input-group-sm mb-3 ">
        <span class="input-group-text" id="inputGroup-sizing-sm">
            name one thing that you like most about Nisar( if any)</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="love">
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlTextarea1" class="form-label">Write the message here</label>
        <textarea class="form-control rounded-4" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
  <div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary btn-sm rounded-3">Submit</button>
    <button type="reset" class="btn btn-primary btn-sm rounded-3">reset</button>
  </div>
  </form>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>


