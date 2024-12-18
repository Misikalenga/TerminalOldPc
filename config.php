<?php
//  combien de fois la page a été ouverte
    session_start();
    if(isset($_SESSION['index'])) {
        $_SESSION['index'] = $_SESSION['index']+1;
    }else{
        $_SESSION['index']=1;
    }
    $numberSession= $_SESSION['index'];

// recuperer l'adresse ip
    if (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipSession = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipSession = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipSession= $_SERVER['REMOTE_ADDR'];
    }
?>