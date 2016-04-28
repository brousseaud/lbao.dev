<br>
<div class="row scoreboard">
<div class="medium-7 columns headlines">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lesmolles.jpg" alt="slide 1" />
    <!--<div class="orbit-caption">
      Caption One.
    </div>-->

</div>
<div class="medium-5 columns rank">
<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1"><h2>Division 1</h2></a></li>
  <li class="tab-title" role="presentational"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" controls="panel2-2"><h2>Division 2</h2></a></li>
</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
<?php the_field('div1'); ?>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
<?php the_field('div2'); ?>
  </section>
<a href="http://lbaoutaouais.com/classement/" class="right">Classement complet</a>
</div>
</div>
</div>
<br style="clear:both" />
<div class="row scoreboard">
	<div class="small-12 columns">
<h2 style="font-size:2em;">R&eacute;sultats r&eacute;cents</h2>
<?php get_template_part('sportspress/event-blocks-results'); ?>
</div>
</div>
<div class="row">
<div class="large-12 medium-12 small-12 columns">
<?php get_template_part('templates/content', 'page'); ?>
<?/*php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'front-page'); ?>
<?php endwhile; */?>
</div>
</div>
<div class="row commanditaires">
<h2 style="font-size:1.2em;color:#ccc;text-align:center;">Nos partenaires</h2>
<div class="small-1 medium-1 large-1 columns">
&nbsp;
</div>
<div class="small-12 medium-3 large-3 columns">
<?php the_field('bloc_2'); ?>
</div>
<div class="small-12 medium-3 large-4 columns">
<?php the_field('bloc_1'); ?>
</div>
<div class="small-12 medium-4 large-3 columns">
<?php the_field('bloc_3'); ?>
</div>
<div class="small-1 medium-1 large-1 columns">
&nbsp;
</div>
</div>
