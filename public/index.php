<?php
session_start(); // セッションを開始
// echo "hoge";
include '/var/www/app/View/common/header.php';


// セッションにユーザー情報が保存されているかチェック
if (isset($_SESSION['user_id'])) {
    echo "ログイン済み";
    // ログイン済みのユーザーに対して表示する内容
    // ユーザーダッシュボードページなどにリダイレクトすることもできます
    // header("Location: /dashboard.php");
    // exit;
} else {
    echo "<button onclick=\"location.href='login.php'\">ログイン</button>";
}

include '/var/www/app/View/common/footer.php';
?>
