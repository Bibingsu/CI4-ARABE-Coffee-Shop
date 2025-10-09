<?php
// signIn.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In | Café Aroma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 bg-[#f9f6f1]">

  <!-- Navbar -->
  <header class="bg-white shadow-md fixed w-full z-10">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold text-brown-800">☕ Café Aroma</h1>
      <nav>
        <ul class="flex gap-6">
          <li><a href="#menu" class="hover:text-brown-600">Menu</a></li>
          <li><a href="#about" class="hover:text-brown-600">About</a></li>
          <li><a href="#contact" class="hover:text-brown-600">Contact</a></li>
          <li><a href="\moodboard" class="hover:text-brown-600">Mood board</a></li>
          <li><a href="\roadmap" class="hover:text-brown-600">Road Map</a></li>
          <li><a href="\signin" class="hover:text-brown-600">Sign In</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Sign In Form -->
  <main class="flex justify-center items-center min-h-screen bg-[#f9f6f1] pt-20">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
      <h2 class="text-2xl font-bold text-center mb-6">Sign In</h2>
      <form action="signIn.php" method="POST" class="space-y-4">
        <div>
          <label class="block text-sm font-medium mb-1">Email</label>
          <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-600">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Password</label>
          <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-600">
        </div>
        <button type="submit" class="w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-500">Sign In</button>
      </form>
      <p class="text-center text-sm mt-4">
        Don’t have an account? <a href="\signup" class="text-yellow-600 font-semibold">Sign Up</a>
      </p>
    </div>
  </main>
</body>
</html>
