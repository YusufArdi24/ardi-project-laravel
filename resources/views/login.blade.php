<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black">

    <form id="LoginForm" class="bg-gradient-to-br from-gray-700 via-gray-800 to-gray-900 p-8 rounded-xl shadow-2xl w-96">
        <h2 class="text-2xl font-semibold text-center text-white mb-6">Welcome Back</h2>

        <div class="mb-4">
            <label for="username" class="block text-gray-300 font-semibold mb-2">Username:</label>
            <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-600 rounded-lg bg-gray-800 text-white focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-300 font-semibold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-600 rounded-lg bg-gray-800 text-white focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-2 rounded-lg hover:from-blue-600 hover:to-indigo-700 transition duration-200 shadow-lg">LOGIN</button>
    </form>

    <script src="asset/js/script.js"></script>
</body>
</html>
