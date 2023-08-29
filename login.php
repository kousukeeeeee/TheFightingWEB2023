<?php
require_once './function.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = checkLogin($_POST['id'], $_POST['password']);
    
    if($result) {
        // 一致した場合には、ログイン状態にする
        $_SESSION['login'] = $_POST['id'];
      }
    }
header('Location: /bbs.php');