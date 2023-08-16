<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>自己紹介</title>
</head>
<body>
	<h1>自己紹介</h1>
    <h2>人となり</h2>
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
        <div class='title'>大出晃輔／東京在住の三十路男</div>
      </div>
	<p>「こーすけ」と呼んでください</p>
    <style>.box {
        width: 800px;
        height: 500px;
        border-radius: 5px;
        box-shadow: 0 2px 30px rgba(black, .2);
        background: lighten(#f0f4c3, 10%);
        position: relative;
        overflow: hidden;
        transform: translate3d(0, 0, 0);
      }
      
      .wave {
        opacity: .4;
        position: absolute;
        top: 3%;
        left: 50%;
        background: #0af;
        width: 500px;
        height: 500px;
        margin-left: -250px;
        margin-top: -250px;
        transform-origin: 50% 48%;
        border-radius: 43%;
        animation: drift 3000ms infinite linear;
      }
      
      .wave.-three {
        animation: drift 5000ms infinite linear;
      }
      
      .wave.-two {
        animation: drift 7000ms infinite linear;
        opacity: .1;
        background: yellow;
      }
      
      .box:after {
        content: '';
        display: block;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(#e8a, 1), rgba(#def, 0) 80%, rgba(white, .5));
        z-index: 11;
        transform: translate3d(0, 0, 0);
      }
      
      .title {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 1;
        line-height: 300px;
        text-align: center;
        transform: translate3d(0, 0, 0);
        color: white;
        text-transform: uppercase;
        font-family: 'Playfair Display', serif;
        letter-spacing: .4em;
        font-size: 24px;
        text-shadow: 0 1px 0 rgba(black, .1);
        text-indent: .3em;
      }
      @keyframes drift {
        from { transform: rotate(0deg); }
        from { transform: rotate(360deg); }
      }</style>

    <h2>職業・経歴</h2>
    Webマーケター・広告コンサルタント
    Google、Yahoo!、SNS広告の運用をメインでやっています。
    前職では、制作部署にてバナー画像の制作もやっていました。皆さんがよく見るような電子コミック系のバナーもたぶん作ったことあります(笑)
    <div>
        <p>こんなイメージです↓</p>
        <img src="download.jpg">
    </div>

    <h2>趣味</h2>
    <ol>
		<li>剣道</li>
		<li>人狼</li>
		<li><span style="color: red;">カタン</span></li>
		<li>漫画（ワンピース／ワンパンマン／スパイファミリー）/</li>
	</ol>
   

    <ol>
    <?php
    // $syumi = "趣味";
    $syumi = array("剣道", "人狼", "カタン", "漫画");
        for ($i = 0; $i <= 3 ; $i++) {
            echo "<li>". $i. ":". $syumi[$i]. "</li>";
            //echo "<br>";
            //echo ${array[3]}
            //echo "こんにちは";
    }
    ?>
    </ol>

    <h2>この会への参加目的・モチベーション</h2>
    プログラミングに興味があり独学で少し勉強していたのですが、一人だとなかなか続かず、、、みんなで勉強できる良い機会があったので参加しました！よろろすお願いするます！
    
    <h2>夢</h2>
    プログラミングの力を使って、あくせく働かずに暮らすこと。<br>
    <span style="color: white;">カタン世界一</span>


    

    <p>もちろん内容はそれぞれ任意で足し引きして良いです</p>
    <p style="color: red;">色を付けたり</p>
    <p style="font-size: 2em;">文字を大きくしたり</p>
    <p style="transform: rotate(45deg);">文字を斜めにしたり</p>
    <p>自由な発想で作成してください</p>
    <div>
        <p>もちろん画像や動画を貼るのもOKです</p>
        <img src="https://image.lgtmoon.dev/122295">
    </div>
</body>
</html>