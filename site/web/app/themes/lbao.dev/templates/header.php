<header>
<div class="top-scores teamScores row hide-for-small-only hide-for-medium-only show-for-large-up">
    <div class="left-arrow"><i class="fi-arrow-left"></i></div>
<ul class="scores">
  <?php get_template_part('sportspress/event-blocks-top'); ?>
</ul>
<div class="right-arrow"><i class="fi-arrow-right"></i></div>
</div>
  <div class="top-bar hide-for-small-only">
    <div class="row">
      <div class="logo-container">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/dist/images/lbao.png" class="logo"></a>
    </div>
      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <?php if (has_nav_menu('primary_navigation')) :?>
            <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s',]);?>
          <?php endif;?>
        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-scores teamScores row hide-for-large">
<div class="row scoresM small-up-2 medium-up-3">
        <?php get_template_part('sportspress/event-blocks-mobile'); ?>
      </div>
    </div>
  </div>

</header>
