<?php
$insert=false;
if(isset($_POST['name'])){



 $server="localhost";
 $username="root";
 $password="";

 $con=mysqli_connect($server,$username,$password);

 if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
 }
//  echo "Success connecting  to the db";

 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desc=$_POST['desc'];


 $sql="INSERT INTO `US_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ( ' $name', ' $age', ' $gender', ' $email', ' $phone', ' $desc', current_timestamp());";

//  echo $sql;
 if($con->query($sql)==true){
    // echo "successfully inserted";
    $insert=true;
 }
 else{
    echo "ERROR: $sql <br> $con->error";
 }
 $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sriracha&display=swap"
        rel="stylesheet">
</head>

<body>
    <img class="bg" src="images/iit.jpeg" alt="IIT Madras" srcset="">

    <div class="container">
        <h1>Welcome to IIT Madras US Trip form</h1>
        <p>Enter Your Details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert==true){
        echo " <p id='green'>$name Thanks for submitting your form .we are happy to see you joining us for the US trip  </p>";
        }
       ?>
        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <span><button class="btn">Submit</button>
                <button class="btn">Reset</button></span>

        </form>
    </div>
    <script src="index.js"></script>


</body>


</html>