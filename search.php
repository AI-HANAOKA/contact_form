<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索ページ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./aseets/css/reset.css">
    <link rel="stylesheet" href="./aseets/css/search.css">
</head>
<body>
    <div class="search">
        <form action="" method="post" class="search__form">
            <h1 class="search__title">検索ページ</h1>
            <p class="search__text">検索したいCODEを入力してください。</p>
            <input type="text" name="code" class="search__inputBox">
            <input type="submit" value="検索" class="search__button">
        </form>
    <?php
        // データベース接続
        $dsn = 'mysql:dbname=contact_form;host=localhost';
        $user = 'root';
        $password='';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->query('SET NAMES utf8');
        // SQL文の発行
        if (!empty($_POST)) {
            $sql = 'SELECT * FROM `survey` WHERE `code` = ?';
            $date[] = $_POST['code'];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($date);

            while (1) {
                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($rec == false) {
                    break;
                }
                $code = $rec['code'];
                $name = $rec['name'];
                $email = $rec['email'];
                $content = $rec['content'];
            }
        }
        $dbh = null;
    ?>
        <?php if (isset($code)): ?>
        <section class="search__result">
            <h3 class="search__num">
                <?= $code; ?>
            </h3>
            <div class="search__valueBox">
                <p class="search__value">
                    <?= '<span class="search__em">お名前： </span>' . $name; ?>
                </p>
                <p class="search__value">
                    <?= '<span class="search__em">メールアドレス： </span>' . $email; ?>
                </p>
                <p class="search__value">
                    <?= '<span class="search__em">問い合わせ内容： </span>' . $content; ?>
                </p>
            </div>
        </section>
        <?php endif?>
        <a href="./index.php" class="search__back">問い合わせフォームへ</a>
    </div>

</body>
</html>