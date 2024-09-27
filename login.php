<?php
include("/common/Database.php");
$username = $_POST['username']; 
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM  `registration`
    WHERE username IN ('$username') AND Password IN ('$password')");
    while ($row = mysqli_fetch_array($result))
    {
        session_start(); 
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
    
    if($_SESSION['password'] == $password)
    {
        echo "sucessful login... ";
    
    }
    mysqli_close($conn);
    exit;
    }
    $error="Invalid login!";
    echo $error;
    mysqli_close($conn);
    exit;
?>