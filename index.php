<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./aseets/css/reset.css">
    <link rel="stylesheet" href="./aseets/css/style.css">
</head>
<body>
    <section class="contact">
        <h1 class="contact__title">お問い合わせ</h1>
        <form class="contact__form" action="check.php" method="POST">
            <div class="contact__name">
                <label for="name" class="contact__nameTitle">お名前</label>    
                <input class="contact__nameInput" type="text" name="name" id="name">
            </div>
            <div class="contact__email">
                <label for="email" class="contact__emailTitle">メールアドレス</label>
                <input class="contact__emailInput" name="email" type="email" id="email">
            </div>
            <div class="contact__content">
                <label for="content" class="contact__contentTitle">問い合わせ内容</label>
                <textarea name="content" class="contact__content" rows="15" id="content"></textarea>
            </div>
            <input class="contact__button" type="submit" value="入力確認">
        </form>
        <div class="manage">
            <a href="./view.php" class="manage__view">問い合わせ一覧</a>
            <a href="./search.php" class="manage__search">検索ページ</a>
        </div>
    </section>
</body>
</html>