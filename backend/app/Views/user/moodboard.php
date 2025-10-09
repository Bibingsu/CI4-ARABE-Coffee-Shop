<?php
// moodboard.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Board | Café Aroma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 bg-[#f9f6f1]">

  <!-- Header -->
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

  <!-- Content -->
  <main class="max-w-6xl mx-auto pt-28 px-6">
    <h2 class="text-4xl font-bold mb-8 text-center">Mood Board</h2>

    <!-- Color Palette -->
    <section class="mb-16">
      <h3 class="text-2xl font-semibold mb-4">🎨 Color Palette</h3>
      <div class="flex gap-6">
        <div class="w-24 h-24 bg-yellow-600 rounded-xl flex items-center justify-center text-white font-bold">#FACC15</div>
        <div class="w-24 h-24 bg-[#f9f6f1] border rounded-xl flex items-center justify-center text-gray-800 font-bold">#F9F6F1</div>
        <div class="w-24 h-24 bg-brown-800 rounded-xl flex items-center justify-center text-white font-bold">#4E342E</div>
      </div>
    </section>

    <!-- Typography -->
    <section class="mb-16">
      <h3 class="text-2xl font-semibold mb-4">🔤 Typography</h3>
      <p class="font-sans text-xl mb-2">This is Sans Serif (Tailwind Default)</p>
      <p class="font-serif text-xl">This is Serif (Tailwind Serif)</p>
    </section>

    <!-- Buttons -->
    <section class="mb-16">
      <h3 class="text-2xl font-semibold mb-4">🔘 Buttons</h3>
      <div class="flex flex-wrap gap-4">
        <button class="px-6 py-3 bg-yellow-600 text-white rounded-full hover:bg-yellow-500">Primary</button>
        <button class="px-6 py-3 bg-brown-800 text-white rounded-full hover:bg-brown-700">Secondary</button>
        <button class="px-6 py-3 border-2 border-yellow-600 text-yellow-600 rounded-full hover:bg-yellow-50">Bordered</button>
        <button class="px-6 py-3 bg-gray-400 text-white rounded-full cursor-not-allowed" disabled>Disabled</button>
      </div>
    </section>

    <!-- Card Sample -->
    <section class="mb-16">
      <h3 class="text-2xl font-semibold mb-4">📦 Card Sample</h3>
      <div class="bg-white shadow-md rounded-2xl overflow-hidden max-w-xs">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600" alt="Latte" class="w-full h-40 object-cover">
        <div class="p-4">
          <h4 class="text-xl font-bold">Sample Card</h4>
          <p class="text-gray-600">A sample card component with image, title, and description.</p>
        </div>
      </div>
    </section>

    <!-- Logos -->
    <section class="mb-16">
      <h3 class="text-2xl font-semibold mb-4">☕ Logos</h3>
      <div class="flex gap-8">
        <div class="w-24 h-24 bg-yellow-600 rounded-full flex items-center justify-center text-white font-bold">Logo</div>
        <div class="w-24 h-24 bg-brown-800 flex items-center justify-center text-white font-bold">Logo</div>
      </div>
    </section>

  </main>
</body>
</html>
