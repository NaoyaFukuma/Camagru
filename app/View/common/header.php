<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Camagru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body>
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/" class="text-gray-800 text-lg font-bold">Camagru</a>
            <nav>
                <ul class="flex items-center space-x-4">
                    <li><a href="/" class="text-gray-800 hover:text-gray-600">Home</a></li>
                    <li><a href="/explore" class="text-gray-800 hover:text-gray-600">Explore</a></li>
                    <li><a href="/about" class="text-gray-800 hover:text-gray-600">About</a></li>
                </ul>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="/profile" class="flex items-center">
                    <img src="path_to_profile_pic.jpg" alt="Profile" class="w-8 h-8 rounded-full">
                </a>
                <a href="/logout" class="text-gray-800 hover:text-gray-600">Logout</a>
            </div>
        </div>
    </header>
