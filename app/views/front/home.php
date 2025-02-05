<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">


    <header class="bg-blue-600 text-white py-6 shadow-md">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl font-semibold text-center">Welcome to Our Application</h1>
            <nav class="mt-4">
                <ul class="flex justify-center space-x-8">
                    <li><a href="/articles" class="text-white hover:text-blue-300 transition duration-200">Articles</a></li>
                    <li><a href="/about" class="text-white hover:text-blue-300 transition duration-200">About</a></li>
                    <li><a href="/contact" class="text-white hover:text-blue-300 transition duration-200">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main class="max-w-7xl mx-auto p-6 mt-10">
        <section class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800">Latest Articles</h2>
            <p class="text-lg text-gray-600 mt-4">Check out our latest articles and updates.</p>

        </section>
    </main>


    <footer class="bg-blue-600 text-white py-4 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; <?php echo date("Y"); ?> Our Application. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
