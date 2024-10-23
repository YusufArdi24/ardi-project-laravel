<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-black text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-2xl font-bold">Nike</a>
      <ul class="flex space-x-6 text-lg">
        <li><a href="#" class="hover:text-gray-400">Home</a></li>
        <li><a href="#" class="hover:text-gray-400">Shop</a></li>
        <li><a href="#" class="hover:text-gray-400">About</a></li>
        <li><a href="#" class="hover:text-gray-400">Contact</a></li>
      </ul>
      <a href="#" class="hover:text-gray-400">Cart (0)</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-16 bg-gray-200">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">New Collection 2024</h1>
    <p class="text-lg text-gray-600 mb-6">Discover the latest trends in sportswear</p>
    <a href="#" class="bg-black text-white py-3 px-6 rounded-full hover:bg-gray-800 transition duration-300">Shop Now</a>
  </section>

  <!-- Featured Products Section -->
  <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Product 1 -->
      <div class="bg-white p-4 rounded-lg shadow-lg text-center">
        <img src="asset/images/b8b9b4fc199b3d4a2477773bf01a81b8.jpg" alt="Nike Sneaker" class="w-full h-48 object-contain mb-4">
        <h3 class="text-lg font-semibold">Nike Sneaker</h3>
        <p class="text-gray-600">$99.99</p>
      </div>
      <!-- Product 2 -->
      <div class="bg-white p-4 rounded-lg shadow-lg text-center">
        <img src="asset/images/65cdb00bf8b7fe4366097ea7e6d34280.jpg" alt="Nike Airzoom Carbon 2" class="w-full h-48 object-contain mb-4">
        <h3 class="text-lg font-semibold">Nike Airzoom Carbon 2</h3>
        <p class="text-gray-600">$89.99</p>
      </div>
      <!-- Product 3 -->
      <div class="bg-white p-4 rounded-lg shadow-lg text-center">
        <img src="asset/images/357bab0110c0bd45a7163a89755663de.jpg" alt="Nike Airzoom Carbon 1" class="w-full h-48 object-contain mb-4">
        <h3 class="text-lg font-semibold">Nike Airzoom Carbon 1</h3>
        <p class="text-gray-600">$79.99</p>
      </div>
      <!-- Product 4 -->
      <div class="bg-white p-4 rounded-lg shadow-lg text-center">
        <img src="asset/images/a13eb2f72c9e0fcfef96a53334ba6c45.jpg" alt="Nike Phantom Gx" class="w-full h-48 object-contain mb-4">
        <h3 class="text-lg font-semibold">Nike Phantom Gx</h3>
        <p class="text-gray-600">$89.99</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-white py-4">
    <div class="container mx-auto text-center">
      <p>© 2024 Nike. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
