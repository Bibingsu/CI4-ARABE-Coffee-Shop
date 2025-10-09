<?= $this->include('templates/header'); ?>

<!-- Hero -->
<section class="h-screen bg-[url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=1600')] bg-cover bg-center flex items-center justify-center text-white text-center">
  <div class="bg-black/50 p-8 rounded-2xl">
    <h2 class="text-4xl md:text-6xl font-bold mb-4">Brewed with Passion</h2>
    <p class="mb-6 text-lg">Your cozy spot for fresh coffee and warm moments.</p>
    <a href="#menu" class="bg-yellow-600 px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-500">Explore Menu</a>
  </div>
</section>

<!-- Menu Highlights -->
<section id="menu" class="py-16 max-w-6xl mx-auto px-6">
  <h3 class="text-3xl font-bold text-center mb-12">Our Favorites</h3>
  <div class="grid md:grid-cols-3 gap-8">
    <?php
      $menu = [
        ["name" => "Classic Latte", "desc" => "Smooth and creamy with rich espresso.", "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600"],
        ["name" => "Cappuccino", "desc" => "Perfect balance of foam, milk, and espresso.", "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600"],
        ["name" => "Mocha", "desc" => "Chocolate meets espresso in a sweet delight.", "img" => "https://images.unsplash.com/photo-1510626176961-4b57d4fbad03?w=600"]
      ];

      foreach ($menu as $item) {
        echo "
        <div class='bg-white shadow-md rounded-2xl overflow-hidden'>
          <img src='{$item['img']}' alt='{$item['name']}' class='w-full h-48 object-cover'>
          <div class='p-4'>
            <h4 class='text-xl font-semibold'>{$item['name']}</h4>
            <p class='text-gray-600'>{$item['desc']}</p>
          </div>
        </div>
        ";
      }
    ?>
  </div>
</section>

<!-- About -->
<section id="about" class="py-16 bg-yellow-50">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h3 class="text-3xl font-bold mb-6">About Us</h3>
    <p class="text-gray-700 text-lg leading-relaxed">
      At Café Aroma, we believe coffee is more than just a drink — it’s an experience. 
      Our beans are carefully sourced, our baristas pour their hearts into every cup, 
      and our cozy space is designed for meaningful conversations and quiet moments alike.
    </p>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-16 max-w-5xl mx-auto px-6">
  <h3 class="text-3xl font-bold text-center mb-8">Contact Us</h3>
  <div class="grid md:grid-cols-2 gap-8">
    <div>
      <h4 class="font-semibold text-xl mb-2">Visit Us</h4>
      <p class="text-gray-700">123 Brew Street, Manila, Philippines</p>
      <p class="text-gray-700 mt-2">Open: Mon-Sun 8AM - 9PM</p>
    </div>
    <div>
      <h4 class="font-semibold text-xl mb-2">Get in Touch</h4>
      <p class="text-gray-700">📞 (02) 123-4567</p>
      <p class="text-gray-700">📧 hello@cafearoma.com</p>
    </div>
  </div>
</section>

<?= $this->include('templates/footer'); ?>