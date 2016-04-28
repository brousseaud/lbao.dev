  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
      <div class="show-for-small-only">
        <nav class="tab-bar">
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
          </section>
                   <section class="middle tab-bar-section">
        <h1 class="title">Mathieufleury.ca</h1>
      </section>
        </nav>
        <aside class="left-off-canvas-menu">
          <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'off-canvas-list'));
          endif; ?>
        </aside>
      </div>
      <?php $logoSmall = (get_locale() == 'fr_FR' ? 'logo-small-fra.png' : 'logo-small-eng.png'); ?>
      <?php $logoBig = (get_locale() == 'fr_FR' ? 'logo-big-fra.png' : 'logo-big-eng.png'); ?>
      <header>
       <div class="navigation">
        <div class="socialBar">
          <div class="row">
           <div class="large-10 medium-10 small-4 columns"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ottawa.png" alt="Ottawa" class=""/></div>
           <div class="large-2 medium-2 small-8 columns">
            <ul class="social large-block-grid-5 medium-block-gird-5 small-block-grid-5">
              <li><a href="https://www.facebook.com/mathieu.fleury.7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/fbook.png" alt="Facebook" /></a></li>
              <li><a href="https://twitter.com/MathieuFleury"><img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/twitter.png" alt="Twitter" /></a></li>
              <li><a href="http://fleury2014.tumblr.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/tumblr.png" alt="Tumblr" /></a></li>
              <li><a href="https://vimeo.com/user6669364/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/vimeo.png" alt="Vimeo" /></a></li>
              <?php pll_the_languages(array('hide_current' => 1 , 'show_flags' => 0 )); ?>
            </ul>

          </div>

        </div>
      </div>
      <div class="row hide-for-small-only">
        <div class="columns">
          <div class="contain-to-grid sticky">
            <nav class="top-bar large" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1><a href="http://latelierw.ca/clients/mfleury"><span><?php _e('Lower Town, Sandy Hill, Vanier', 'roots'); ?></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/<?php echo $logoSmall; ?>" alt="Mathieu Fleury" /></a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>
              <section class="top-bar-section">
                <?php if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
                endif; ?>
              </section>
            </nav>
          </div>
        </div>
      </div>
    </div>  
    <div class="slider">
      <ul class="mfleury-slider" style="z-index:-5" data-options="animation:slide;pause_on_hover:false;navigation_arrows:false;slide_number:false;timer_show_progress_bar:false;bullets:false;" data-orbit>
        <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/04/photo5.jpg')"></div>
        </li>
         <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/05/photo7.jpg')"></div>
        </li>
        <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/04/photo2-1.jpg')"></div>
        </li>
        <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/04/photo4.jpg')"></div>
        </li>
         <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/05/photo8.jpg')"></div>
        </li>
        <li>
          <div class="carousel" style="background-image:url('http://latelierw.ca/clients/mfleury/app/uploads/2015/04/photo6.jpg')"></div>
        </li>
      </ul>
      <div class="row">
        <div class="logo-big column"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img_min/<?php echo $logoBig; ?>" > </div>
      </div>
    </div>
  </header>