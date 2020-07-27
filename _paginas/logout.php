<?php
include_once("sessions.php");
if(isset($_SESSION["user_session_token"])){
    $session = new configSession();
    $logout = $session->logoutUser();
    if($logout){
        header("Location: ../index.php");
        exit();
    }else{
        header("location: chama.php"); 
    }
}else{
    header("Location: ../login.php");
    exit();
}
?>