<html>
 <head>
  <title>日本の野鳥</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <div>
          <div class="ribbon5">
            <h3>好きな鳥</h3>
          </div>
        <div class="black">シマナエガ </div>

      <div class="text_wrapper">
        <img src="img1/1000_F_139003934_LbzbNDTDoMM2BgaZ8N5rSZyKcO25Ns1Y.jpg">
        <img src="img1/1000_F_309520513_HBMaUvijXfpdHhrGmknoSA4OhD1pHIHP.jpg">
        <img src="img1/1000_F_410096558_kvNtcswiKv0EXfnu85AiddSB9AbegjlG.jpg">
        <img src="/img1/450-20190129194323375967.jpg">
       </div>
        
       <div>
        <div class="box">生息地　 北海道</div>
        <div class="box">名前の由来　 シマエナガという名前は、尾羽が長くて丸い体型がまるで柄杓（ひしゃく）のようなことから付けられています。</div>
        <div class="box1">好きなポイント</div>
        <div class="box">見た目がとにかく可愛い 写真が幻想的</div>
      </div>
      </div>

      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          try {
              $pdo = new PDO('mysql:host=127.0.0.1;dbname=git_test;charset=utf8', 'root', '');
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
              $name = $_POST['Name'] ?? null;
              $email = $_POST['email'] ?? null;
              $message = $_POST['message'] ?? null;
  
              $stmt = $pdo->prepare("INSERT INTO comments (name, email, message, visibility) VALUES (:name, :email, :message, 1)");
              $stmt->bindParam(':name', $name);
              $stmt->bindParam(':email', $email);
              $stmt->bindParam(':message', $message);
  
              $stmt->execute();
          } catch (PDOException $e) {
              exit("エラー: " . $e->getMessage());
          }
      }
      ?>
  
      <div id="data-form">
          <div id="Title"><h1>コメント一覧</h1></div>
          <div id="comment">
              <?php
              try {
                  $dsn = 'mysql:dbname=git_test;host=localhost;charset=utf8';
                  $user = 'root';
                  $password = '';
                  $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $sql = 'SELECT id, name, `message` FROM comments WHERE visibility = 1';
                  $stmt = $dbh->query($sql);
  
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      $id = $row['id'];
                      $commenterName = $row['name'];
                      $commentMessage = $row['message'];
  
                      echo "<p>{$id}.{$commenterName}さん:{$commentMessage}</p>\n";
                  }
              } catch (PDOException $e) {
                  print('エラー:' . $e->getMessage());
                  die();
              }
              $dbh = null;
              ?>
          </div>
  
          <form action="" method="post" id="comment_form">
              <h1>コメントフォーム</h1>
              <div id="name"><h2>ニックネーム</h2><input type="text" name="Name" id="Input_name" placeholder="ああああ" onkeydown="return preventEnterSubmitAndMoveNext(event);"></div>
              <div id="email"><h2>メールアドレス</h2><input type="text" name="email" id="Input_mailadress" placeholder="sample@yahoo.co.jp" onkeydown="return preventEnterSubmitAndMoveNext(event);"></div>
              <div id="message"><h2>内容</h2><textarea name="message" id="textarea_content" cols="30" rows="5" placeholder="入力欄" maxlength="1000" onkeydown="return preventEnterSubmitAndMoveNext(event);"></textarea></div>
              <button type="submit" id="send-btn" onclick="return validateForm(event)">送信</button>
          </form>
      </div>
  </body>
  </html>

    </body>

    </html>