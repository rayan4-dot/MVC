<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Form Container -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Create Article</h1>
    
        <!-- Form -->
        <form action="/articles/store" method="POST" class="space-y-6">
            <!-- Title Input -->
            <div>
                <label for="title" class="block text-lg font-medium text-gray-700">Title:</label>
                <input type="text" id="title" name="title" required class="w-full p-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>

            <!-- Content Input -->
            <div>
                <label for="content" class="block text-lg font-medium text-gray-700">Content:</label>
                <textarea id="content" name="content" required class="w-full p-3 mt-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" rows="6"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="w-full py-3 px-6 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition duration-200">Create Article</button>
            </div>

            <div class="text-center mt-4">
            <a href="/articles" class="w-full py-3 px-6 bg-gray-600 text-white font-medium rounded-md hover:bg-gray-700 transition duration-200 inline-block">Back to Articles</a>
        </div>
        </form>
    </div>

</body>
</html>
