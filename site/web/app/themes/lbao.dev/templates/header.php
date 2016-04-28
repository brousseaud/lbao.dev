<header>
<div class="top-scores row">
    <div class="left-arrow"><</div>

<ul class="scores">
  <?php get_template_part('sportspress/event-blocks-top'); ?>
</ul>
<div class="right-arrow">></div>

</div>
  <div class="top-bar">
    <div class="row">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></li>
          <?php if (has_nav_menu('primary_navigation')) :?>
            <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s',]);?>
          <?php endif;?>
        </ul>
      </div>
    </div>
  </div>
</header>
