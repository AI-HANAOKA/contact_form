<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./aseets/css/style.css">
</head>
<body>
    <section class="contact">
        <h1 class="contact__title">お問い合わせ</h1>
        <form class="contact__form" action="check.php" method="POST">
            <div class="contact__name">
                <h2 class="contact__nameTitle">お名前</h2>    
                <input class="contact__nameInput" type="text" name="name">
            </div>
            <div class="contact__email">
                <h2 class="contact__emailTitle">メールアドレス</h2>
                <input class="contact__emailInput" name="email" type="text">
            </div>
            <div class="contact__content">
                <h2 class="contact__contentTitle">問い合わせ内容</h2>
                <textarea name="content" class="contact__content" rows="15"></textarea>
            </div>
            <input class="contact__button" type="submit" value="入力確認">
        </form>
    </section>
</body>
</html>