<?php
    require_once "pdo.php";
    
    $prodName = $_POST['name'];
    $prodPrice = $_POST['price'];
    $cateId = $_POST['cateId'];
    $id = $_GET['id'];
    
    $data = [
        'prodName' => $prodName,
        'prodPrice' => $prodPrice,
        'cateId' => $cateId,
        'id' => $id
    ];
    
    updateProdData($data);
    
    header("Location: http://localhost/learn_php/product/index.php");
    exit;
?>
