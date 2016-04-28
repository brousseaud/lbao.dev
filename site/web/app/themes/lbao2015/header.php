<br>
<div class="row scoreboard">
<div class="large-12 medium-12 small-12 columns">
  <!--<h2>Prochains matchs</h2>-->
   <?php get_template_part('sportspress/event-blocks-header'); ?>
</div>
</div>
<br>
<div class="contain-to-grid sticky">
  <header>
    <nav class="top-bar large" data-topbar>
      <ul class="title-area">
        <li class="name"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2014.png" alt="LBAO" class="large" style="height:130px;margin-top:-15px;"/></a></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
        endif; ?>
      </section>
    </nav>
  </header>
</div>

</div>
<!-- contain-to-grid -->
