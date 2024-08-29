<!doctype HTML>
<html lang = "ja">

<head>
        <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

    <body>
        <h1>お問い合わせ内容の確認</h1>

        <div class="confirm">
            <p>お問い合わせ内容はこちらでよろしいでしょうか？
               <br>よろしければ「登録する」ボタンを押してください。
            </p>
            <p>名前
                <br>
                <?php echo $_POST['name'];?>
            </p>
            <p>メールアドレス
                <br>
                <?php echo $_POST['mail'];?>
            </p>
            <p>年齢
                <br>
                <?php echo $_POST['age']."歳";?>
            </p>
            <p>コメント
                <br>
                <?php echo $_POST['comments'];?>
            </p>

            <div class="buttons">           <!--「戻る」or「登録」のボタンを作成する-->
                <form action="index.html">
                    <input type="submit" class="button1" value="戻って修正する"/>
                </form>
                
                <form action="insert.php" method="post">    <!--再度、各箱の中に格納し、次のファイルへ引渡す -->
                    <input type="submit" class="button2" value="登録する"/>
                    <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
                    <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
                </form>
            </div>
        </div>    
    </body>
</html>


