<?php
// roadmap.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Road Map | Café Aroma</title>
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


  <!-- Main -->
  <main class="max-w-6xl mx-auto pt-28 px-6">
    <h2 class="text-4xl font-bold mb-8 text-center">📍 Road Map</h2>


    <!-- Road Map Timeline -->
    <section class="mb-16">
      <ol class="relative border-l-4 border-yellow-600">
        <li class="mb-10 ml-6">
          <span class="absolute -left-3 flex items-center justify-center w-6 h-6 bg-yellow-600 rounded-full"></span>
          <h3 class="text-lg font-semibold text-brown-800">Phase 1: Launch</h3>
          <p class="text-gray-600">Create landing page, branding, and basic menu system.</p>
        </li>
        <li class="mb-10 ml-6">
          <span class="absolute -left-3 flex items-center justify-center w-6 h-6 bg-yellow-600 rounded-full"></span>
          <h3 class="text-lg font-semibold text-brown-800">Phase 2: Features</h3>
          <p class="text-gray-600">Add contact form, dynamic menu items, and mood board.</p>
        </li>
        <li class="ml-6">
          <span class="absolute -left-3 flex items-center justify-center w-6 h-6 bg-yellow-600 rounded-full"></span>
          <h3 class="text-lg font-semibold text-brown-800">Phase 3: Growth</h3>
          <p class="text-gray-600">Introduce user accounts, online ordering, and loyalty program.</p>
        </li>
      </ol>
    </section>


    <!-- List of Functionalities -->
    <section>
      <h3 class="text-2xl font-semibold mb-4">⚙️ List of Functionalities</h3>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Responsive landing page with hero section</li>
        <li>Dynamic menu cards (from PHP array / database)</li>
        <li>About & Contact sections with business details</li>
        <li>Mood Board for branding consistency</li>
        <li>Road Map page with project phases</li>
        <li>Future: User login & online ordering system</li>
      </ul>
    </section>
  </main>


</body>
</html>


