<?php
    require_once "vendor/autoload.php";
    require_once "config.php";

    use \App\Controllers\MainController;
    use \App\Controllers\CommentController;
    
    $controller = new MainController;
    $commentController = new CommentController;
    $pr = $controller->products();
    $comm = $commentController->showComments();
    $addComm = $commentController->addComent();
    $approve = $commentController->approveComments();
    $unnaprovedComments = $commentController->showUnnaprovedComments();

    $data = [
        'products' => $pr,
        'comments' => $comm,
        'addcomm'  => $addComm
    ];
    // print_r($data);
    // die();