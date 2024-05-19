<?php

function redirect ($url){
    header("Location:".$url);
    ob_flush();
    exit();
}

function setMessage($msg)
{
    $_SESSION['message'] = $msg;
}


function getMessage()
{
    if (isset($_SESSION['message'])) 
    {

        $returnmessage = $_SESSION['message'];
        unset($_SESSION['message']);
        return $returnmessage;

    } else 
    {
        return ""; 
    }
}


function isMessage()
{
    return isset($_SESSION['message'])?true:false;
}

function removeMessage()
{
    unset($_SESSION['message']);
}

function flashMessage()
{
    $message = isset($_SESSION['message'])?$_SESSION['message']:"";
} 

?>