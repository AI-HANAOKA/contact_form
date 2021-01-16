    <?php
        // dデータベース接続
        $dsn = 'mysql:dbname=contact_form;host=localhost';
        $user = 'root';
        $password='';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->query('SET NAMES utf8');
        // SQL文
        $sql = 'SELECT * FROM `survey`';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        // 受け取ったデータを連想配列で取り出し表示させる
        while (1) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec == false) {
                break;
            }
            echo $rec['code'] . '<br>';
            echo $rec['name'] . '<br>';
            echo $rec['email'] . '<br>';
            echo $rec['content'] . '<br>';
            echo '<hr>';
        }

        $dbh = null;
    ?>