<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test 2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 font-sans antialiased">

    <div class="flex flex-col items-center justify-center min-h-screen text-center p-8">
        <div class="bg-white rounded-xl shadow-xl p-10 max-w-md">
            <h1 class="text-5xl font-extrabold text-purple-600 mb-4">
                🎉 Tailwind is fully working!
            </h1>
            <p class="text-gray-700 text-lg">Including custom background, layout, and fonts.</p>
        </div>
    </div>

</body>
</html>
