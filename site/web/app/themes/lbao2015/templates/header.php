<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
<header>
 <nav class="tab-bar show-for-small-only">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
           <section class="middle tab-bar-section">
        <h1 class="title">lbaoutaouais.com</h1>
      </section>
</nav>
    <!-- Off Canvas Menu -->

    <aside class="left-off-canvas-menu">
        <!-- whatever you want goes here -->
         <ul class="off-canvas-list">
        <li><label>Navigation</label></li>
        </ul>
         <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'off-canvas-list'));
        endif; ?>
    </aside>
<div class="row scoreboard">
<div class="large-12 medium-12 small-12 columns">
<br>
   <?php get_template_part('sportspress/event-blocks-header'); ?>

</div>
</div>
<div class="contain-to-grid sticky show-for-medium-up">
    <nav class="top-bar large" data-topbar>
      <ul class="title-area">
        <li class="name"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2014.png" class="large" alt="LBAO" /></a></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
        endif; ?>
      </section>
    </nav>

</div>

  </header>

<!-- contain-to-grid -->
