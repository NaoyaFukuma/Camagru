<?php
session_start(); // セッションを開始
session_destroy(); // セッションを破棄
header('Location: /'); // メインページにリダイレクト
exit;
?>
