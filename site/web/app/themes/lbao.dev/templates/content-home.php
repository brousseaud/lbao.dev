<div class="row">
  <div class="large-8 columns">
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <li class="is-active orbit-slide">
          <img class="orbit-image" src="<?php echo get_field("photo_1");?>" alt="Space">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="assets/img/orbit/02.jpg" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="assets/img/orbit/03.jpg" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </li>
        <li class="orbit-slide">
          <img class="orbit-image" src="assets/img/orbit/04.jpg" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </li>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
      </nav>
    </div>



    <article <?php post_class(); ?>>
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </article>
    <article class="classement">
      <h2> Classement</h2>
      <div class="row">
        <div class="small-12 columns">
          <?php echo do_shortcode(get_field("division_1")); ?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <?php echo do_shortcode(get_field("division_2")); ?>

        </div>
      </div>
    </article>
    </div>
    <div class="large-4 columns">
      <div class="sidebloc">
        <div class="row">
          <div class="large-12 columns">
            <h3>Moyenne</h3>
            <ul class="tabs" data-tabs id="moy">
              <li class="tabs-title is-active"><a href="#moy1" aria-selected="true"><i class="fi-male-symbol"></i> Hommes</a></li>
              <li class="tabs-title"><a href="#moy2"><i class="fi-female-symbol"></i> Femmes</a></li>
            </ul>
            <div class="tabs-content" data-tabs-content="moy">
              <div class="tabs-panel is-active" id="moy1">
                <?php echo do_shortcode(get_field("top_5_moyenne")); ?>
              </div>
              <div class="tabs-panel" id="moy2">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebloc">
        <div class="row">
          <div class="large-12 columns">
            <h3>Coups s&ucirc;rs</h3>
            <ul class="tabs" data-tabs id="cs">
              <li class="tabs-title is-active"><a href="#cs1" aria-selected="true"><i class="fi-male-symbol"></i> Hommes</a></li>
              <li class="tabs-title"><a href="#cs2"><i class="fi-female-symbol"></i> Femmes</a></li>
            </ul>
            <div class="tabs-content" data-tabs-content="cs">
              <div class="tabs-panel is-active" id="cs1">
                <?php echo do_shortcode(get_field("top_5_coups_surs")); ?>
              </div>
              <div class="tabs-panel" id="cs2">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebloc">
        <div class="row">
          <div class="large-12 columns">
            <h3>Points produits</h3>
            <ul class="tabs" data-tabs id="pp">
              <li class="tabs-title is-active"><a href="#pp1" aria-selected="true"><i class="fi-male-symbol"></i> Hommes</a></li>
              <li class="tabs-title"><a href="#pp2"><i class="fi-female-symbol"></i> Femmes</a></li>
            </ul>
            <div class="tabs-content" data-tabs-content="pp">
              <div class="tabs-panel is-active" id="pp1">
                <?php echo do_shortcode(get_field("top_5_pp")); ?>
                <div class="tabs-panel" id="pp2">

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  <br>
