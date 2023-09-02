<?php
require_once './function.php';
$result = [
    'id' => true
];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // validation処理
    $result['id'] = checkDeplicateAccount($_POST['id']);
    if($result['id']) {
        // 保存処理
        saveAccount($_POST['id'], $_POST['password']);
        header('Location: /bbs.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formサンプル</title>
</head>
<style>
.error-text {
    color: red;
}
</style>
<body>
    <h1>BBS - account作成</h1>
    <div>
        <p>idとpassword入力</p>
    </div>
    <form action="/account.php" method="POST">
        <div>
            <label for="id">
                ID: <input type="text" id="id" name="id" value="" />
            </label>
            <?php if($result['id'] === false): ?>
                <p class="error-text">重複したidが既に存在しています</p>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">
                Password: <input type="password" id="password" name="password" value="" />
            </label>
        </div>
        <input type="submit" value="作成">
    </form>
</div>
</body>
</html>