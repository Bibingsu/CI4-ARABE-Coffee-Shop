<?php
// roadmap.php
?>

<?= view('components/header'); ?>

<main class="mx-auto px-6 pt-28 max-w-6xl">

  <h2 class="mb-12 font-bold text-4xl text-center">📍 Café Aroma Road Map</h2>

  <!-- Road Map Timeline -->
  <section class="mb-16">
    <h3 class="mb-6 font-semibold text-2xl">Development Phases</h3>
    <ol class="relative ml-3 border-yellow-600 border-l-4">
      <li class="mb-10 ml-6">
        <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
        <h3 class="font-semibold text-[#4b2e05] text-lg">Phase 1: Launch</h3>
        <p class="text-gray-700">Build the landing page, brand design, and initial static menu layout.</p>
      </li>

      <li class="mb-10 ml-6">
        <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
        <h3 class="font-semibold text-[#4b2e05] text-lg">Phase 2: Features</h3>
        <p class="text-gray-700">Add dynamic menu cards, moodboard design, and basic form interactivity.</p>
      </li>

      <li class="ml-6">
        <span class="-left-3 absolute flex justify-center items-center bg-yellow-600 rounded-full w-6 h-6"></span>
        <h3 class="font-semibold text-[#4b2e05] text-lg">Phase 3: Growth</h3>
        <p class="text-gray-700">Integrate sign-in/sign-up system, database-driven content, and user feedback.</p>
      </li>
    </ol>
  </section>

  <!-- List of Functionalities -->
  <section class="mb-16">
    <h3 class="mb-6 font-semibold text-2xl">⚙️ List of Functionalities</h3>
    <ul class="space-y-2 text-gray-700 list-disc list-inside">
      <li>Responsive landing page with hero, menu, about, and contact sections</li>
      <li>Dynamic product cards powered by PHP</li>
      <li>Unified navigation bar and footer across all pages</li>
      <li>Moodboard page for color, typography, and design consistency</li>
      <li>Roadmap page showing project progress and features</li>
      <li>Sign-in and Sign-up pages for future user interaction</li>
    </ul>
  </section>

  <!-- Call to Action -->
  <section class="bg-yellow-50 shadow-inner py-12 rounded-2xl text-center">
    <h3 class="mb-4 font-bold text-[#4b2e05] text-2xl">☕ Stay tuned for more brews!</h3>
    <p class="mb-6 text-gray-700">New features and experiences are coming soon to Café Aroma.</p>
    <a href="<?= base_url('/') ?>" class="bg-yellow-600 hover:bg-yellow-500 px-6 py-3 rounded-full font-semibold text-white">Back to Home</a>
  </section>

</main>

<?= view('components/footer'); ?>
