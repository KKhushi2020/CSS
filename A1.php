<!doctype html>
    <head lang="en">
        <title>Form</title>
        <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Student Information </h1>
    <form action="/Week/A1.php" method="post">

    <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="StudentFirstName" aria-label="StudentFirstName">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="StudentLastName" aria-label="StudentLastName">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="optionMale">
  <label class="form-check-label" for="inlineCheckbox1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="optionFemale">
  <label class="form-check-label" for="inlineCheckbox2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="optionOther" >
  <label class="form-check-label" for="inlineCheckbox3">Other</label>
</div>


  <div class="col">
    <input type="text" class="form-control" placeholder="FatherName" aria-label="FatherName">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="MotherName" aria-label="MotherName">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="DateOfBirth" aria-label="DateOfBirth">
  </div>
   <div class="col">
    <input type="text" class="form-control" placeholder="Age" aria-label="Age">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="PhoneNumber" aria-label="Phone=Number">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Address" aria-label="Address">
  </div>


  <select class="form-select" aria-label="Default select example">
  <option selected>GPA out of 5</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
  
<button type="Submit"> Submit </button>
</form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $StudentFirstName = $_POST['StudentFirstName'];
    $StudentLastName = $_POST['StudentLastName'];
    $FatherName = $_POST['FatherName'];
    $MotherName = $_POST['MotherName'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Age = $_POST['Age'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];

    // Connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "a1";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry, We are unable to connect at the moment!");
    } else {
        $sql = "INSERT INTO students (StudentFirstName, StudentLastName, FatherName, MotherName, DateOfBirth, Age, PhoneNumber, Email, Address)
                VALUES ('$StudentFirstName', '$StudentLastName', '$FatherName', '$MotherName', '$DateOfBirth', '$Age', '$PhoneNumber', '$Email', '$Address')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Data is not inserted due to " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
