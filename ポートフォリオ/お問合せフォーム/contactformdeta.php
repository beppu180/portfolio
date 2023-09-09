<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
<header>
<h1>PHP</h1>
</header>
<main>
<h2>登録結果！</h2>
<pre>

<?php
try{
    // mysql個人情報
$db = new PDO('mysql:dbname=ポートフォリオ;host=localhost;charset=utf8','root','asagao12');
    // /mysql個人情報

    // 表の内容
$count = $db->exec('INSERT INTO お問合せフォーム SET 名前="'.$_POST['your-name'].'", Eメール="'.$_POST['your-email'].'", 内容="'.$_POST['your-message'].'", 年月日=NOW()');
    // /表の内容
    
// 作業結果の表示
echo $count . "件のデータを登録しました！";
} catch(PDOException $e){
echo 'DB接続エラー' . $e->getMessage();
// /作業結果の表示
}   
?>
</pre>
</main>
</body>
=======
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
<header>
<h1>PHP</h1>
</header>
<main>
<h2>登録結果！</h2>
<pre>

<?php
try{
    // mysql個人情報
$db = new PDO('mysql:dbname=ポートフォリオ;host=localhost;charset=utf8','root','asagao12');
    // /mysql個人情報

    // 表の内容
$count = $db->exec('INSERT INTO お問合せフォーム SET 名前="'.$_POST['your-name'].'", Eメール="'.$_POST['your-email'].'", 内容="'.$_POST['your-message'].'", 年月日=NOW()');
    // /表の内容
    
// 作業結果の表示
echo $count . "件のデータを登録しました！";
} catch(PDOException $e){
echo 'DB接続エラー' . $e->getMessage();
// /作業結果の表示
}   
?>
</pre>
</main>
</body>
>>>>>>> 5ef3362414ec97123d807e8b12dc7d4c996e01db
</html>