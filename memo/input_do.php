<!doctype html>
<html lang= 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php 
  try{
    $db = new PDO('mysql:dbname=mydb;host=localhost;port=8889;charset=utf8','root','root');
  
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->bindParam(1, $_POST['memo']);
    $statement->execute();
    echo '送信されました。';
  } catch(PDOExceqtion $e) {
      echo 'DB接続エラー：' . $e->getMessage();
  }

?>
</pre>
</main>
</body>    
</html>