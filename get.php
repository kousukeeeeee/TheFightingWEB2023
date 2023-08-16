<!DOCTYPE html>
<html>
<head></head>
<body>
<pre>
<?php
//var_dump($_GET);
var_dump($_POST);
?>
</pre>
<form id="ore" action="get.php" method="POST">
    <div>
        <label for="text">テキストだよ</label>
        <input id="text" type="text" name="text" value="<?php echo $_POST['text']; ?>"/>
    </div>
    <div>
        <label for="number">数字だよ</label>
        <input id="number" type="number" name="number" value="<?php echo $_POST['number']; ?>" />
    </div>

    <div>
        <label for="area_text">複数行入るよ！</label>
        <textarea id="area_text" name="multi_row_text" ><?php echo $_POST['multi_row_text']; ?></textarea>
    </div>

    <div>
        <label for="sex_otoko">男:
            <input id="sex_otoko" type="radio" name="sex" value="男" <?php if($_POST['sex']=="男") echo 'checked'?>/>
        </label>
        <label for="sex_onna">女:
            <input id="sex_onna" type="radio" name="sex" value="女" <?php if($_POST['sex']=="女") echo 'checked'?>/>
        </label>
        <label for="sex_not_ans">答えたくない:
            <input id="sex_not_ans" type="radio" name="sex" value="答えたくない" <?php if($_POST['sex']==""||$_POST['sex']=="答えたくない") echo 'checked'?>/>
        </label>
    </div>

    <div>
        <label for="pref">都道府県</label>
        <select id="pref" name="pref">
        <option value="" >都道府県</option>
        <?php
            $prefs = array(
                '1'=>'北海道',
                '2'=>'青森県',
                '3'=>'岩手県',
                '4'=>'宮城県',
                '5'=>'秋田県',
                '6'=>'山形県',
                '7'=>'福島県',
                '8'=>'茨城県',
                '9'=>'栃木県',
                '10'=>'群馬県',
                '11'=>'埼玉県',
                '12'=>'千葉県',
                '13'=>'東京都',
                '14'=>'神奈川県',
                '15'=>'新潟県',
                '16'=>'富山県',
                '17'=>'石川県',
                '18'=>'福井県',
                '19'=>'山梨県',
                '20'=>'長野県',
                '21'=>'岐阜県',
                '22'=>'静岡県',
                '23'=>'愛知県',
                '24'=>'三重県',
                '25'=>'滋賀県',
                '26'=>'京都府',
                '27'=>'大阪府',
                '28'=>'兵庫県',
                '29'=>'奈良県',
                '30'=>'和歌山県',
                '31'=>'鳥取県',
                '32'=>'島根県',
                '33'=>'岡山県',
                '34'=>'広島県',
                '35'=>'山口県',
                '36'=>'徳島県',
                '37'=>'香川県',
                '38'=>'愛媛県',
                '39'=>'高知県',
                '40'=>'福岡県',
                '41'=>'佐賀県',
                '42'=>'長崎県',
                '43'=>'熊本県',
                '44'=>'大分県',
                '45'=>'宮崎県',
                '46'=>'鹿児島県',
                '47'=>'沖縄県'
            );

            foreach ( $prefs as $key => $pref ) {
                if($key == $_POST['pref']) {
                    echo "<option value='$key' selected>".$pref."</option>";
                    //echo "<option value='$value' selected>".$value."</option>";
                    //echo "あ";
                    } else {
                    //echo "<option value="$_POST['pref']">". $pref;
                    echo "<option value='$key' >".$pref."</option>";


                }
            }
            ?>
        </select>
    </div>

    <div><input type="submit" value="送信" name="submit_button"></div>
</form>
</body>
</html>