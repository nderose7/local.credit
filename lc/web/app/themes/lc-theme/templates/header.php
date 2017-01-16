<header class="banner">
  <div class="container posrel">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://res.cloudinary.com/local-credit/image/upload/v1484470858/logo_ych1ty.png" width="170"></a>
    <div class="all-products">
      <span><a>All Products</a></span>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="10" viewBox="0 0 64 32">
        <path fill="#ccc" d="M34.84 19.68c-0.723 0.719-1.72 1.163-2.82 1.163s-2.097-0.444-2.82-1.163l-16-16c-1.811-1.618-4.172-2.655-6.771-2.799l-2.429-0.001c-2.2 0-2.72 1.28-1.16 2.84l26.32 26.36c0.723 0.719 1.72 1.163 2.82 1.163s2.097-0.444 2.82-1.163l26.36-26.36c1.56-1.56 1.040-2.84-1.16-2.84h-2.4c-2.647 0.147-5.023 1.199-6.85 2.849z"></path>
      </svg>
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <nav class="nav-right">
      <?php
      if (has_nav_menu('primary_nav_right')) :
        wp_nav_menu(['theme_location' => 'primary_nav_right', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>


<?php 

if (is_front_page()) {
  include('/srv/www/local.credit/current/web/app/themes/lc-theme/elements/cta/cta-homepage.php');
}
?>