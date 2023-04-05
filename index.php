<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pranjal";
$conn=mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo "Congrats.. ! You have successfully connected";
}
else{
    die("Sorry!");
}
echo "<br>";
?>
<?php
$ename = $_POST["ename"];
$exp = $_POST["exp"];
$post = $_POST["post"];
$sql="INSERT INTO `iosys_data` (`Employee Name`, `Experience(In Year)`, `Post`) VALUES ('$ename', '$exp', '$post')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Form Successfully Submitted";
}
else{
    echo "Nope";
}
?>
<form action="/pranjal/Simple_Form.php" method="post">
    <div class="ename">
        <label for="ename">Enter Employee Name</label>
        <input type="text" class="emp-name" name="ename" placeholder="Enter Employee Name">
    </div>
    <div class="experience">
        <label for="exp">Experience(In Years)</label>
        <input type="exp" class="experience" name="exp" placeholder="Experience">
    </div>
    <div class="post">
        <label for="post">Experience(In Years)</label>
        <input type="post" class="post" name="post" placeholder="Post">
    </div>
    <button type="submit" class="submit-btn">Submit</button>
</form>
</body>
</html>