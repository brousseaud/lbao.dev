<?php
/**
* Event Blocks
*
* @author 		ThemeBoy
* @package 	SportsPress/Templates
* @version     1.9.13
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$defaults = array(
	'id' => null,
	'title' => false,
	'status' => 'default',
	'date' => 'default',
	'date_from' => 'default',
	'date_to' => 'default',
	'league' => null,
	'season' => null,
	'number' => 24,
	'link_teams' => get_option( 'sportspress_link_teams', 'no' ) == 'yes' ? true : false,
	'link_events' => get_option( 'sportspress_link_events', 'yes' ) == 'yes' ? true : false,
	'paginated' => get_option( 'sportspress_event_blocks_paginated', 'yes' ) == 'yes' ? true : false,
	'rows' => get_option( 'sportspress_event_blocks_rows', 10 ),
	'order' => 'default',
	'show_all_events_link' => false,
	'show_title' => get_option( 'sportspress_event_blocks_show_title', 'no' ) == 'yes' ? true : false,
	'show_league' => get_option( 'sportspress_event_blocks_show_league', 'no' ) == 'yes' ? true : false,
	'show_season' => get_option( 'sportspress_event_blocks_show_season', 'no' ) == 'yes' ? true : false,
	'show_venue' => get_option( 'sportspress_event_blocks_show_venue', 'no' ) == 'yes' ? true : false,
);

extract( $defaults, EXTR_SKIP );

$calendar = new SP_Calendar( $id );
if ( $status != 'default' )
$calendar->status = $status;
if ( $date != 'default' )
$calendar->date = $date;
if ( $date_from != 'default' )
$calendar->from = $date_from;
if ( $date_to != 'default' )
$calendar->to = $date_to;
if ( $league )
$calendar->league = $league;
if ( $season )
$calendar->season = $season;
if ( $order != 'default' )
$calendar->order = $order;
$data = $calendar->data();
$usecolumns = $calendar->columns;

if ( $show_title && false === $title && $id ):
	$caption = $calendar->caption;
	if ( $caption )
	$title = $caption;
	else
	$title = get_the_title( $id );
endif;

if ( isset( $columns ) ) {
	$usecolumns = $columns;
}

if ( $title )
echo '<h4 class="sp-table-caption">' . $title . '</h4>';
?>
<?php # Required for DataTables ?>

				<?php
				$i = 0;

				if ( intval( $number ) > 0 )
				$limit = $number;

				foreach ( $data as $event ):
					if ( isset( $limit ) && $i >= $limit ) continue;

					$permalink = get_post_permalink( $event, false, true );
					$results = get_post_meta( $event->ID, 'sp_results', true );
					$teams = array_unique( get_post_meta( $event->ID, 'sp_team' ) );
					$teams = array_filter( $teams, 'sp_filter_positive' );
					$logos = array();
					$j = 0;
					$z = 0;
					foreach( $teams as $team ):
						$team_id = (int)$team;
						if(isset($results[$team_id])){
						$points = $results[$team_id];
						$point[$z] = '<span class="team-score"><b>' . $points['r'] . '</b></span>';
						$z++;
					}else{
						$point = null;
					}
						$j++;
						if ( has_post_thumbnail ( $team ) ):
							if ( $link_teams ):
								$logo = '<a class="team-visit logo" href="' . get_permalink( $team, false, true ) . '" title="' . get_the_title( $team ) . '">' . get_the_post_thumbnail( $team, 'sportspress-fit-icon' ) . '</a>';
								$teams_vis = get_the_title( $team );

							/*	$score = $results[$team_id]['r'];
								echo $score;*/
							else:
								$logo = '<span class="team-home logo" title="' . get_the_title( $team ) . '">' . get_the_post_thumbnail( $team, 'sportspress-fit-icon' ) . '</span>';
								$teams_home = get_the_title( $team );
							endif;
							$logos[] = $logo;
						endif;

					endforeach;
					?>
					<li class="game">
						<div class="row">
							<div class="small-8 games columns">
							<div class="row">
								<div class="small-9 logoTeam columns"><?php echo $logos[0] . " <span class='team-abbr'>" . get_the_title($teams[0]) . "</span></div><div class='small-3 points columns'>" . $point[0];?></div>
							</div>
							<div class="row">
								<div class="small-9 logoTeam columns"><?php echo $logos[1] . " <span class='team-abbr'>" . get_the_title($teams[1]) . "</span></div><div class='small-3 points columns'>" . $point[1];?></div>
						</div>
						<!--<div class="small-5 games columns">
							<!--<time class="sp-event-date" datetime="<?php echo $event->post_date; ?>">
								<?php echo sp_add_link( get_the_time( get_option( 'date_format' ), $event ), $permalink, $link_events ); ?>
							</time>-->

							<!--	<?php echo str_replace(" min", "", sp_add_link( '<span class="sp-result">' . implode( '</span> - <span class="sp-result">', apply_filters( 'sportspress_event_blocks_team_result_or_time', sp_get_main_results_or_time( $event ), $event->ID ) ), $permalink, $link_events . '</span>' )); ?>-->
							<?php if ( $show_league ): $leagues = get_the_terms( $event, 'sp_league' ); if ( $leagues ): $league = array_shift( $leagues ); ?>
								<div class="sp-event-league"><?php echo $league->name; ?></div>
							<?php endif; endif; ?>
							<?php if ( $show_season ): $seasons = get_the_terms( $event, 'sp_season' ); if ( $seasons ): $season = array_shift( $seasons ); ?>
								<div class="sp-event-season"><?php echo $season->name; ?></div>
							<?php endif; endif; ?>
							<?php if ( $show_venue ): $venues = get_the_terms( $event, 'sp_venue' ); if ( $venues ): $venue = array_shift( $venues ); ?>
								<div class="sp-event-venue"><?php echo $venue->name; ?></div>
							<?php endif; endif; ?>
					<!--	</div>-->
						</div>
						<div class="small-4 games results columns">
							<?php switch(get_post_status($event->ID)) {
									case "publish":
							?>
							<div class="vertical-align"><a href="<?php echo $permalink;?>">Final</a></div>
							<?
									break;
									case "draft":
							?>
							<div class="vertical-align"><?php echo str_replace(" min", "", sp_add_link( '<span class="sp-result">' . implode( '</span> - <span class="sp-result">', apply_filters( 'sportspress_event_blocks_team_result_or_time', sp_get_main_results_or_time( $event ), $event->ID ) ), $permalink, $link_events )); ?></div>
							<?php
								break;
						};?>
						</div>
					</div>
					</li>
					<?php
					$i++;
				endforeach;
				?>
		<?php
		if ( $id && $show_all_events_link )
		echo '<div class="sp-calendar-link sp-view-all-link"><a href="' . get_permalink( $id ) . '">' . __( 'View all events', 'sportspress' ) . '</a></div>';
		?>
