<?php
require_once './function.php';
$result = [
    'name' => true,
    'comment' => true
];
$fh = openFile();
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    // validation処理
    $result = validationPost($_POST['name'], $_POST['comment']);
    if($result['name'] && $result['comment']) {
        // 保存処理
        requestPost($fh);
    }
}
$bbs = getBbs($fh);
closeFile($fh);
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
    <h1>BBS</h1>
    <div>
        <p>これは良い感じのBBSです<br>
            みんな好きに書き込んでね！
        </p>
    </div>
    <form>

    </form>
    <form action="/bbs.php" method="POST">
        <div>
            <label for="name">
                名前: <input type="text" id="name" name="name" value="" />
            </label>
            <?php if($result['name'] === false): ?>
                <p class="error-text">入力できるのは英数のみ３文字以上32文字以下です</p>
            <?php endif; ?>
        </div>
        <div>
            <label for="comment">
                コメント:<textarea id="comment" name="comment" ></textarea>
            </label>
            <?php if($result['comment'] === false): ?>
                <p class="error-text">入力は1024文字までです</p>
            <?php endif; ?>
        </div>
        <input type="submit" value="送信">
    </form>
    <hr />
<h2>書き込み一覧だよー！</h2>
<div>
<?php
foreach($bbs as $item):
?>
    <div>
        <p>nama: <?php echo $item['name']; ?></p>
        <p>comment: <?php echo str_replace(PHP_EOL, '<br>', $item['comment']); ?></p>
        <p>date time: <?php echo date('Y/m/d H:i:s', $item['date']); ?></p>
    </div>
    <hr />
<?php
endforeach;
?>
</div>
</body>
</html>