<?php
/*
Template Name: Front Page
*/
?>
<br>
<div class="row scoreboard">
<div class="large-7 medium-8 small-12 columns headlines">
<ul class="example-orbit" data-orbit data-options="bullets:false;navigation_arrows:false;slide_number:false;">
  <li>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lesmolles.jpg" alt="slide 1" />
    <!--<div class="orbit-caption">
      Caption One.
    </div>-->
  </li>
</ul>
</div>
<div class="large-5 medium-4 small-12 columns">

<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational" ><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">R&eacute;sultats</a></li>
  <li class="tab-title" role="presentational" ><a href="#panel2-2" role="tab" tabindex="0"aria-selected="false" controls="panel2-2">Classment</a></li>

</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
       <?php get_template_part('sportspress/event-blocks-results'); ?>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
    <h2>Second panel content goes here...</h2>
  </section>
</div>


xxxxxxx


</div>
</div>
<div class="row">
<div class="large-12 medium-12 small-12 columns">
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile;?>
</div>
</div>
<div class="row commanditaires">
<h2 style="font-size:0.8em;color:#ccc;">Nos partenaires</h2>
<div class="small-6 medium-3 large-3 columns">
</div>
<div class="small-6 medium-3 large-3 columns">
</div>
<div class="small-6 medium-3 large-3 columns">
</div>
<div class="small-6 medium-3 large-3 columns">
</div>
</div>
