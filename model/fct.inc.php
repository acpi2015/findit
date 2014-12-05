<?php
function isConnect(){return isset($_SESSION['mail']);
}
function connect($mail){
$_SESSION['mail']= $mail;
$_SESSION['idAdmin']= $idAdmin;
}
function disconnect(){session_destroy();}
?>