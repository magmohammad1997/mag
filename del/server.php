<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	$id = 0;

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM user WHERE id=$id");
        $_SESSION['message'] = "user deleted!"; 
        header('location: index.php');
    }