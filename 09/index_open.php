<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

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
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>本のブックマーク登録</legend>
     <label>本のタイトル：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="email"></label><br>
     <label>感想<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
