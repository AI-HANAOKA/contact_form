    <?php 
        // 受け取ったデータはindex.phpからのデータではなく、check.phpからのデータ。
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $content = htmlspecialchars($_POST['content']);

        // データベースへ接続する
        $dsn = 'mysql:dbname=contact_form;host=localhost';
        $user = 'root';
        $password='';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->query('SET NAMES utf8');

        // SQL文の実行
        $sql = 'INSERT INTO `survey`(`name`, `email`, `content`) VALUES ("'.$name.'", "'.$email.'", "'.$content.'")';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        // データベースを切断
        $dbh = null;
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせありがとうございました</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./aseets/css/reset.css">
    <link rel="stylesheet" href="./aseets/css/thanks.css">
</head>
<body>
    <section class="contact">
        <h1 class="contact__title">お問い合わせ<br>ありがとうございました！</h1>
        <div class="contact__data">
            <h3 class="contact__dateTitle">お問い合わせ内容</h3>
            <p class="contact__dateValue">お名前： <?= $name; ?></p>
            <p class="contact__dateValue">メールアドレス： <?= $email; ?></p>
            <p class="contact__dateValue">お問い合わせ内容： <?= $content; ?></p>
        </div>
    </section>
</body>
</html>