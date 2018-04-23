<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","test","");
$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."')");?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>問合せフォーム</title>
        <link rel="stylesheet"type="text/css"href="style2.css">
    </head>
    <body>
        <h1>問合せフォーム</h1>
        
        <div class="confirm">
        <p>お問合せ有難うございました。<br>
           3営業日以内に担当者よりご連絡差し上げます。</p>    
            
        </div>
    </body>
</html>