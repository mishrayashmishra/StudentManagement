<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="managementsys";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}


if(isset($_POST['apply']))

{
    $data_name=$_POST['Name'];
    $data_email=$_POST['Email'];
    $data_contact=$_POST['Contact'];
    $data_message=$_POST['Message'];

    $sql="INSERT INTO admission(name,email,contact,message) VALUES (' $data_name','$data_email','$data_contact','$data_message')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']="Your Application was sent Successfully";

        header("location:index.php");
    }

    else
    {
        echo "Submit-Failed";
    }
}


?>