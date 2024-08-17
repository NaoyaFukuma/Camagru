<?php
session_start(); // セッションを開始

// ログイン状態のチェック
$loggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Camagru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <!-- ホームに戻るアイコンボタン -->
            <a href="/" class="text-gray-800 text-lg font-bold flex items-center space-x-2">
                <img src="/images/camagru-icon.png" alt="Camagru Icon" class="h-8 w-8">
                <span>Camagru</span>
            </a>
            <nav class="flex-1 flex justify-center">
                <ul class="flex items-center space-x-4">
                    <li><a href="/" class="text-gray-800 hover:text-gray-600">写真投稿用のページへ</a></li>
                </ul>
            </nav>
            <!-- ユーザーメニューとログアウトボタン -->
            <div class="flex items-center space-x-4">
                <?php if ($loggedIn): ?>
                    <!-- ログインしている場合 -->
                    <div class="flex items-center space-x-4">
                        <a href="/profile" class="flex items-center">Profile</a>
                        <a href="/logout" class="text-gray-800 hover:text-gray-600">Logout</a>
                    </div>
                <?php else: ?>
                    <!-- ログインしていない場合 -->
                    <div id="login-menu">
                        <a href="/login" class="text-gray-800 hover:text-gray-600">Login</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
</body>
</html>
