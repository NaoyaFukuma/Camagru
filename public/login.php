<?php
session_start(); // セッションを開始

// ダミーのユーザー認証情報（実際にはデータベースなどで確認）
$validUsername = 'user';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ユーザー名とパスワードのチェック
    if ($username === $validUsername && $password === $validPassword) {
        // 認証が成功した場合、セッションにユーザー情報を保存
        $_SESSION['user_id'] = 1; // ユーザーIDを保存
        $_SESSION['username'] = $username; // ユーザー名を保存

        // ログイン後、メインページへリダイレクト
        header('Location: /');
        exit;
    } else {
        $error = 'ユーザー名またはパスワードが間違っています。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Login - Camagru</title>
</head>
<body>
    <h2>ログイン</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="/login">
        <label for="username">ユーザー名:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>
