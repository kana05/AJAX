<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本の野鳥</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div>
        <div class="main">
            <h3>好きな鳥</h3>
        </div>
        <div class="black">シマナエガ </div>

        <div class="text_wrapper">
    <img src="img1\1000_F_139003934_LbzbNDTDoMM2BgaZ8N5rSZyKcO25Ns1Y.jpg" alt="Image 1">
    <img src="img1\1000_F_309520513_HBMaUvijXfpdHhrGmknoSA4OhD1pHIHP.jpg" alt="Image 2">
    <img src="img1/1000_F_410096558_kvNtcswiKv0EXfnu85AiddSB9AbegjlG.jpg" alt="Image 3">
</div>

        </div>

        <div>
            <div class="box">生息地　 北海道</div>
            <div class="box">名前の由来　 シマエナガという名前は、尾羽が長くて丸い体型がまるで柄杓（ひしゃく）のようなことから付けられています。</div>
            <div class="box1">好きなポイント</div>
            <div class="box">見た目がとにかく可愛い 写真が幻想的</div>
        </div>
    </div>

    <?php
    
    ?>

    <div id="data-form">
        <div id="Title">
            <h1>コメント一覧</h1>
            <button id="show-comments-btn">表示</button>
        </div>
        <div id="comment"></div>


<form action="Registration.php" method="post" id="comment_form">
    <label for="name">名前：</label>
    <input type="text" name="name" required><br>

    <label for="email">メールアドレス：</label>
    <input type="email" name="email"><br>

    <label for="message">コメント：</label>
    <textarea name="message" rows="4" required></textarea><br>

    <input type="submit" value="コメントする">
</form>


           
        
    </div>
    <script src="js/index.js"></script>
</body>
</html>
