<?php
require './Comment.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $Name= trim(htmlspecialchars($_POST['user']));
    $Comm= trim(htmlspecialchars($_POST['com']));
    
    
    
    
   if(empty($Name) || empty($Comm)){
    die("All fields are requred");
}

$comm=new Com($Name,$Comm);
$comm->postCom();

header("Location: index.php");
    exit();
}else{
    echo 'invalied request';
}
?>