<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ぬぬの野獣コラ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<style>
    body {
      background-color: #eeeeee;
      text-align:center;
      
  }
  HTML CSSResult Skip Results Iframe
  EDIT ON
  /* Sliding Squares Loading Spinner
     Inspired by https://www.uplabs.com/posts/slidin-squares-loader by Vitaly Silkin 
     Implemented in CSS by Tom Adey */

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .loadingspinner {
    --square: 26px;
    --offset: 30px;

    --duration: 2.4s;
    --delay: 0.2s;
    --timing-function: ease-in-out;

    --in-duration: 0.4s;
    --in-delay: 0.1s;
    --in-timing-function: ease-out;

    width: calc( 3 * var(--offset) + var(--square));
    height: calc( 2 * var(--offset) + var(--square));
    padding: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    margin-bottom: 30px;
    position: relative;
  }

  .loadingspinner div {
    display: inline-block;
    background: darkorange;
    /*background: var(--text-color);*/
    /*box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);*/
    border: none;
    border-radius: 2px;
    width: var(--square);
    height: var(--square);
    position: absolute;
    padding: 0px;
    margin: 0px;
    font-size: 6pt;
    color: black;
  }

  .loadingspinner #square1 {
    left: calc( 0 * var(--offset) );
    top:  calc( 0 * var(--offset) );
    animation: square1 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square2 {
    left: calc( 0 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square2 var(--duration) var(--delay) var(--timing-function) infinite,
              squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }
  
  .loadingspinner #square3 {
    left: calc( 1 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square3 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(2 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square4 {
    left: calc( 2 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square4 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(3 * var(--in-delay)) var(--in-timing-function) both;
  }

  .loadingspinner #square5 {
    left: calc( 3 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square5 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(4 * var(--in-delay)) var(--in-timing-function) both;
  }

  @keyframes square1 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square2 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
  }

  @keyframes square3 {
    0%,100% {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square4 {
    0%      {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes square5 {
    0%      {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }

  @keyframes squarefadein {
    0%      {transform: scale(0.75); opacity: 0.0;}
    100%    {transform: scale(1.0); opacity: 1.0;}
  }
</style>
</head>
<body>
  <!-- 1. ヘッダ -->
  <!-- heroコンポーネント -->
  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          ぬぬの野獣コラ
        </h1>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  // $dsn = "mysql:host=localhost; dbname=xxx; charset=utf8";
  // $username = "xxx";
  // $password = "xxx";
  // try {
  // //     $dbh = new PDO($dsn, $username, $password);
  // // } catch (PDOException $e) {
  // //     echo $e->getMessage();
  // }
      if (isset($_POST['upload'])) {//送信ボタンが押された場合
        array_map('unlink', glob("images/*"));
        array_map('unlink', glob("outputimages/*"));
          $image = uniqid(mt_rand(), true);//ファイル名をユニーク化
          $image .= '.' . substr(strrchr($_FILES['image']['name'], '.'), 1);//アップロードされたファイルの拡張子を取得
            $file = "images/$image";
          //$sql = "INSERT INTO images(name) VALUES (:image)";
          //$stmt = $dbh->prepare($sql);
          //$stmt->bindValue(':image', $image, PDO::PARAM_STR);
          if (!empty($_FILES['image']['name'])) {//ファイルが選択されていれば$imageにファイル名を代入
              move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);//imagesディレクトリにファイル保存
              if (exif_imagetype($file)) {//画像ファイルかのチェック
                //$command="python main.py ";サーバー用
                $command="python main.py";
                $message = "<h1 class ='title'>画像を判定しました</h1><br>もし表示されていなかったら画像から顔が検出できなかったということなので、他の写真をお試しください";
                exec($command);
              } else {
                  $message = '画像ファイルではありません';
                  array_map('unlink', glob("images/*"));
              }
          }

          
          //google_drive




      }
  ?>
  <!--送信ボタンが押された場合-->
  <?php if (isset($_POST['upload'])): ?>
    <?php echo $message; ?>
      <?php
        //$count = 0;
        $files = glob("outputimages/*");
        foreach($files as $file){
          echo "<br>";
          echo "<img src= ${file}>";
          echo "<br>";
          echo "<a href=${file} download>画像をダウンロード</a>";
        }
        
      ?>
  <?php else: ?>
      <form method="post" enctype="multipart/form-data">
          <h1 class = "subtitle">アニメ画像の顔を野獣先輩にします</h1>
          <h1　class="title">画像をアップロード</h1>
          
      
  <div class="container">
    <div class="loadingspinner">
      <div id="square1"></div>
      <div id="square2"></div>
      <div id="square3"></div>
      <div id="square4"></div>
      <div id="square5"></div>
    </div>
  </div>
          <input type="file" name="image">
          <input type="submit" name="upload" value="判定"　href="#" class="button is-success is-small">
      </form>
  <?php endif;?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer class="footer">
    <div class="content has-text-centered">
      <a href="https://yamadanagamasa.github.io/nunupages/"> © nunu.</a>
      </p>
    </div>
  </footer>
</body>
</html>
