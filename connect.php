<?php

$servername="127.0.0.1:3307";
$username = "root";
$password = "";
$database_name="college_predictor";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $Username=$_POST['Username'];
    $Email_ID=$_POST['Email_ID'];
    $Password=$_POST['Password'];

    $sql_query="INSERT INTO signup (uname,uemail,upwd)
    VALUES ('$Username','$Email_ID','$Password')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "sign up successful";
    }
    else
    {
        echo "Error".$sql . "".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>