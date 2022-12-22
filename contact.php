<?php
if (isset($_POST['name'])) {
    

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if (!$con) {
    die("Communication Failed".mysqli_connect_error());
}
echo "Connection Set up";

$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$city=$_POST["city"];
// $gender=$_POST["male"];
$about=$_POST["about"];





$sql=" INSERT INTO `trip` (`S.no`, `Name`, `Email`, `Number`, `City`, `Address`, `dt`) VALUES ( $name, $email, $number, $city,  $about, current_timestamp())";
echo "$sql";

if ($con->query($sql)==true) {
    echo "Suceefully Inserted";
}
echo "Error: $sql $con->error";

$con->close;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="contact.php" method="POST">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Number</label>
                    <input type="number" id="number" name="number" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">City</label>
                    <input type="text" id="city" name="city" class="form-control">
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="">Gender</label>
                    <input type="radio" name="gender" id="gender">Male
                    <input type="radio" name="gender" id="gender">FeMale

                </div> -->
                <div class="form-group col-md-12">
                    <textarea name="about" id="about" cols="60" rows="10" class="form-control"></textarea>

                </div>
                <button class="btn border btn-primary form-control">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>


