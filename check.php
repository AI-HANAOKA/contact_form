    <?php
        // データの受け取り
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $content = htmlspecialchars($_POST['content']);

        // 名前のチェックコード
        if ($name == '') {
            $name_result = 'お名前を入力してください。' . '<br>';
        }else {
            $name_result = 'ようこそ' . $name . '様' . '<br>';
        }
        // メールアドレスのチェックコード
        if ($email == '') {
            $email_result = 'メールアドレスを入力してください。' . '<br>';
        }else {
            $email_result = 'メールアドレス:' . $email . '<br>';
        }
        // 問い合わせ内容のチェックコード
        if ($content == '') {
            $content_result = 'お問い合わせ内容を入力してください。' . '<br>';
        }else {
            $content_result = 'お問い合わせ内容：' . $content . '<br>';
        }
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&">
    <link rel="stylesheet" href="./aseets/css/style.css">
</head>
<body>
    <section class="contact">
        <h1 class="contact__title">入力内容確認</h1>
        <p class="contact__name"><?= $name_result; ?></p>
        <p class="contact__email"><?= $email_result; ?></p>
        <p class="contact__content"><?= $content_result; ?></p>
        <form method="POST" action="thanks.php" >
            <!-- index.phpから受け取った入力データをthanks.phpへcheck.phpでは表示せずにデータを渡す -->
            <input type="hidden" name="name" value="<?= $name; ?>">
            <input type="hidden" name="email" value="<?= $email; ?>">
            <input type="hidden" name="content" value="<?= $content; ?>">

            <input type="button" value="戻る" onclick="history.back()">
            <!--  送信ボタンの表示条件 -->
            <?php if ($name != '' && $email != '' && $content != ''): ?>
            <input type="submit" value="送信" class="contact__button">
            <?php endif; ?>
        </form>
    </section>
    <!-- aタグだとデータが失われる -->
    <!-- <a href="index.php">戻る</a> -->
    <!-- buttonタグの場合 *メソッドの指定が出来ない-->
    <!-- <button type="button" onclick="history.back()">戻る</button> -->
</body>
</html>