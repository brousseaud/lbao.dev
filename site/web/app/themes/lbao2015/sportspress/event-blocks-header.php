<?php
/**
 * Event Blocks Header
 *
 * @author 		ThemeBoy
 * @package 	SportsPress/Templates
 * @version     1.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$primary_result = get_option( 'sportspress_primary_result', null );
$defaults = array(
	'id' => null,
	'status' => 'future',
	'date' => 'default',
	/*'date_from' => 'default',
	'date_to' => 'default',*/
	'number' => 6,
	'link_teams' => get_option( 'sportspress_link_teams', 'no' ) == 'yes' ? true : false,
	/*'paginated' => get_option( 'sportspress_event_blocks_paginated', 'yes' ) == 'yes' ? true : false,
	'rows' => get_option( 'sportspress_event_blocks_rows', 6 ),*/

	/*'show_all_events_link' => false,
	'show_title' => get_option( 'sportspress_event_blocks_show_title', 'no' ) == 'yes' ? true : false,
	'show_league' => get_option( 'sportspress_event_blocks_show_league', 'no' ) == 'yes' ? true : false,
	'show_season' => get_option( 'sportspress_event_blocks_show_season', 'no' ) == 'yes' ? true : false,
	'show_venue' => get_option( 'sportspress_event_blocks_show_venue', 'no' ) == 'yes' ? true : false,*/
);

extract( $defaults, EXTR_SKIP );

$calendar = new SP_Calendar(1408);
if ( $status != 'default' )
	$calendar->status = $status;
if ( $date != 'default' )
	$calendar->date = $date;
if ( $date_from != 'default' )
	$calendar->from = $date_from;
if ( $date_to != 'default' )
	$calendar->to = $date_to;
$calendar->order = 'ASC';
$data = $calendar->data();
$usecolumns = $calendar->columns;

if ( isset( $columns ) ) {
	$usecolumns = $columns;
}

if ( $show_title && $id ) {
	echo '<h4 class="sp-table-caption">' . get_the_title( $id ) . '</h4>';
}
?>

				<?php
				$i = 0;
				if ( intval( $number ) > 0 )
					$limit = $number;
				foreach ( $data as $event ):
					if ( isset( $limit ) && $i >= $limit ) continue;
					$results = get_post_meta( $event->ID, 'sp_results', true );
					$teams = array_unique( get_post_meta( $event->ID, 'sp_team' ) );
					$logos = array();
					$main_results = array();
					$j = 0;
					foreach( $teams as $team ):
						$j++;
						if ( has_post_thumbnail ( $team ) ):
							if ( $link_teams ):
								$logo = '<a class="team-logo logo-' . ( $j % 2 ? 'odd' : 'even' ) . '" href="' . get_post_permalink( $team ) . '" title="' . get_the_title( $team ) . '">' . get_the_post_thumbnail( $team, 'sportspress-fit-icon' ) . '</a>';
							else:
								$logo = get_the_post_thumbnail( $team, 'sportspress-fit-icon', array( 'class' => 'team-logo logo-' . ( $j % 2 ? 'visit' : 'home' ) ) );
							endif;
							$logos[] = $logo;
						endif;
						$team_results = sp_array_value( $results, $team, null );

						if ( $primary_result ):
							$team_result = sp_array_value( $team_results, $primary_result, null );
						else:
							if ( is_array( $team_results ) ):
								end( $team_results );
								$team_result = prev( $team_results );
							else:
								$team_result = null;
							endif;
						endif;
						if ( $team_result != null )
							$main_results[] = $team_result;

					endforeach;
					switch($j) {
						case 0:
							$divSize = "large-12";
						break;
						case 1:
							$divSize = "large-6";
							break;
						case 2:
							$divSize = "large-4";
							break;
						case 3:
							$divSize = "large-3";
							break;
						case 5:
							$divSize = "large-2";
							break;
						}
					?>
					<div class="<?=$divSize?> medium-12 small-12 columns game">
					<div class="row dateTime">
					<div class="large-12 medium-12 small-12 columns date">
					<time class="sp-event-date" datetime="<?php echo $event->post_date; ?>"><?php echo get_the_time( get_option( 'date_format' ), $event ); ?></time>
					</div>

					</div>
						<?php 
							$teamNames = explode(' vs ', $event->post_title, 2);
						?>
						<div class="row game-team-visit">
							<div class="large-10 medium-10 small-10 team columns">
							<?php echo /*implode(*/ $logos[0] . " " . $teamNames[0]/*, ' ' );*/ ?>

							</div>
							<div class="large-2 medium-2 small-2 score columns">
							<?php 
							if(!empty($main_results)):
							echo $main_results[0];
							else:
							echo "-";
							endif;
							?>
							</div>
						</div>

						<div class="row game-team-home">
							<div class="large-10 medium-10 small-10 team columns">
							<?php echo /*implode(*/ $logos[1] . " " . $teamNames[1]/*, ' ' );*/ ?>
							</div>
							<div class="large-2 medium-2 small-2 score columns">
							<?php 
							if(!empty($main_results)):
							echo $main_results[2];
							else:
							echo "-";
							endif;
							?>
							</div>
						</div>
						<div class="row dateTime">
											<div class="large-6 medium-6 small-6 columns time">
							<?php echo get_the_time( get_option( 'time_format' ), $event ); ?>
						</div>
						<div class="large-6 medium-6 small-6 columns statut">
							<a href="<?php echo get_post_permalink( $event, false, true ); ?>">Aper&ccedil;u</a>
						</div>
					</div>
						</div>
							<!--<time class="sp-event-date" datetime="<?php echo $event->post_date; ?>"><?php echo get_the_time( get_option( 'date_format' ), $event ); ?></time>

							<?php if ( ! empty( $main_results ) ): ?>
								<h5 class="sp-event-results"><?php echo implode( $main_results, ' - ' ); ?></h5> 

							<?php else: ?>
								<h5 class="sp-event-time"><?php echo get_the_time( get_option( 'time_format' ), $event ); ?></h5>
							<?php endif; ?>

							<?php if ( $show_league ): $leagues = get_the_terms( $event, 'sp_league' ); if ( $leagues ): $league = array_shift( $leagues ); ?>
								<div class="sp-event-league"><?php echo $league->name; ?></div>
							<?php endif; endif; ?>
							<?php if ( $show_season ): $seasons = get_the_terms( $event, 'sp_season' ); if ( $seasons ): $season = array_shift( $seasons ); ?>
								<div class="sp-event-season"><?php echo $season->name; ?></div>
							<?php endif; endif; ?>
							<?php if ( $show_venue ): $venues = get_the_terms( $event, 'sp_venue' ); if ( $venues ): $venue = array_shift( $venues ); ?>
								<div class="sp-event-venue"><?php echo $venue->name; ?></div>
							<?php endif; endif; ?>
							<h4 class="sp-event-title"><a href="<?php echo get_post_permalink( $event ); ?>"><?php echo $event->post_title; ?></a></h4>-->
					<?php
					$i++;
				endforeach;
				?>
	<!--<div class="large-12">
	<?php
	if ( $id && $show_all_events_link )
		echo '<a class="sp-calendar-link sp-view-all-link" href="' . get_permalink( $id ) . '">' . __( 'View all events', 'sportspress' ) . '</a>';
	?>
	</div>-->