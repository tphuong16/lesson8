<?php
    require_once 'pdo.php';

    $prodId = '';
    $prodName = $_POST['name'];
    $prodPrice = $_POST['price'];
    $cateId = $_POST['cateId'];

    $data = [
        'prodId' => $prodId,
        'prodName' => $prodName,
        'prodPrice' => $prodPrice,
        'cateId' => $cateId
    ];

    createNewProdData($data);

    $location = "http://localhost/learn_php/product/index.php";
    header("Location: $location");
    exit;
?>
