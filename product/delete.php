<?php
    require_once 'pdo.php';
    
    $id = $_POST['id'];
    $data = ['id' => $id];
    
    deleteProdData($data);
    
    header("Location: http://localhost/learn_php/product/index.php");
    exit;
?>
