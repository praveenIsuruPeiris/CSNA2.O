<?php
include "./includes/header.php";

    if(isset($_SESSION['user']))
    {
        session_unset();
        session_destroy();
        session_start();
        setMessage("Logout successful");
        redirect("./login.php");

    }
    else
    {
        setMessage("You're currently not logged in");
        redirect("./login.php");
    }



?>   
