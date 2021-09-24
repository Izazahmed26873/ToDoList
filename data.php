<?php
$title=$_POST['title'];

// echo "Name Is".$name ."Phone Number:".$phone;


include 'includes/config.php';
$sql="INSERT INTO todos(title)VALUES('$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>