<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-4">
        <h1 class="text-3xl text-center font-semibold">Articles</h1>
    </header>


    <div class="max-w-3xl mx-auto p-6">
        <a href="/articles/create" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded mb-6 inline-block">Create New Article</a>

        <ul class="space-y-4">
    <?php foreach ($articles as $article): ?>
        <li class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">

            <h2 class="text-xl font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($article['title']); ?></h2>
            

            <p class="text-gray-700"><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
        </li>
    <?php endforeach; ?>
</ul>


    </div>

</body>
</html>
