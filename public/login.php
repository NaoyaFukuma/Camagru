<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POSTリクエストからメールアドレスとパスワードを受け取る
    $email = $_POST['email'];  // 実際のアプリケーションではサニタイズが必要
    $password = $_POST['password']; // 実際のアプリケーションではサニタイズが必要

    // ここで本来はデータベースに問い合わせてユーザー認証を行いますが、今回はスキップして常に成功とします。
    $_SESSION['user_id'] = 12345;  // ユーザーIDをセッションに設定
    header('Location: index.php'); // ログイン成功後にリダイレクト
    exit;
} else {
    // ログインフォームを表示
    echo '<form action="login.php" method="post">
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Login">
          </form>';
}
?>
