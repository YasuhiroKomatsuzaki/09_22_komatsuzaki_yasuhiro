<?php
Session_start();



//0.外部ファイル読み込み
include("functions.php");
chkSsid();

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail_open.php?id='.$result["id"].'">';
    $view .= h($result["name"])."[".h($result["indate"])."]";
    $view .= '</a>　';
    // $view .= '<a href="delete.php?id='.$result["id"].'">';
    // $view .= '[削除]';
    // $view .= '</a>';
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="index_open.php">[ブックマーク登録 | </a>
                               <a class="navbar-brand" href="select_open.php"> ブックマーク表示 |</a>
                               　 <a class="navbar-brand" href="user_touroku_open.php"> ユーザー登録 |</a>
                               <a class="navbar-brand" href="login.php"> ログイン |</a>
        <br>
       

    </div>
 
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  
    <div class="container jumbotron"><?=$view?></div>

</div>
<!-- Main[End] -->

</body>
</html>
