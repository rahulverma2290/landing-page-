<?php
/*
Template Name: Home Template
*/
get_header();
?>

<?php /* Three Items Sections */ ?>
<section class="three-items">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 col-sm-12 event" style="background:url('<?php the_field('event_box_image'); ?>');">
					<h2><a href="http://localhost/landing-page/events/"><?php the_field('event_box_text'); ?></a></h2>
				</div>
				
				<div class="col-md-4 col-xs-12 col-sm-12 community event" style="background:url('<?php the_field('community_box_image'); ?>');">
					<h2><a href="http://localhost/landing-page/community/"><?php the_field('community_box_text'); ?></a></h2>
				</div>
				
				<div class="col-md-4 col-xs-12 col-sm-12 shop event" style="background:url('<?php the_field('shop_box_image'); ?>');">
					<h2><a href="http://localhost/landing-page/shop"><?php the_field('shop_box_text'); ?></a></h2>
				</div>
			</div>
		</div>
	</div>
</section>

<?php /* Our Mission Sections */ ?>
<section class="our-missions">
	<div class="container-fluid extra-image">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12 our-mision">
					<h2><?php the_field('our_mission_title'); ?></h2>
					<?php the_field('our_mission_details'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12 discount" style="background:url('<?php the_field('discount_background_image'); ?>');">
				<h3><?php the_field('ecsny_discount_title'); ?></h3>
				<h4><?php the_field('ecsny_description'); ?></h4>
				<a class="shop-buton" href="<?php the_field('shop_now_link'); ?>"><?php the_field('shop_now_text'); ?></a>
			</div>
		
			<div class="col-md-6 col-xs-12 col-sm-12 discount new-arrival" style="background:url('<?php the_field('new_arrivals_image'); ?>');">
				<h3><?php the_field('new_arrivals_title'); ?></h3>
			</div>
		</div>
	</div>
</section>

<?php /* Upcoming Events and Forums */ ?>
<section class="upcoming-eventc">
	<div class="container-fluid forum-custom">
		<div class="container">
			<div class="row">

			
				<div class="col-md-6">
					<div class="col-md-12 main-comunity">
							<div class="col-md-6 pull-left">
								<h2><?php the_field('events_title'); ?></h2>
							</div>
							<div class="col-md-6 pull-right">
								<h4><a href="<?php the_field('all_events_link'); ?>"><?php the_field('all_events_text'); ?></a></h4>
							</div>
					</div>
					<div class="col-md-12 col-xs-12 col-sm-12 upcoming-one" style="background:url('<?php the_field('events_header_image'); ?>');">
						<?php dynamic_sidebar('sidebar-4'); ?>
					</div>
				</div>
			
				<div class="col-md-6 clearfix">
					<div class="col-md-12 main-comunity main-forum">
							<div class="col-md-6 pull-left">
								<h2><?php the_field('community_text'); ?></h2>
							</div>
							<div class="col-md-6 pull-right">
								<h4><a href="<?php the_field('go_to_forum_link'); ?>"><?php the_field('go_to_forum_title'); ?></a></h4>
							</div>
					</div>
				
					<div class="col-md-12 col-xs-12 col-sm-12 upcoming-one forum-one" style="background:url('<?php the_field('community_header_image'); ?>');">
						<?php echo do_shortcode('[forum]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="nike-shoe" style="background:url('<?php the_field('nike_background_image'); ?>');">
	<div class="container-fluid">
		<div class="container">
			<div class="col-md-9 col-md-offset-3 footclass">
				<div class="arrange-first">
					<p><?php the_field('performance_title'); ?></p>
					<h2><?php the_field('nike_title'); ?></h2>
					<a href="<?php the_field('shop_button_link'); ?>" class="shop-collection"><?php the_field('shop_button_title'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="leadership-team" style="background:url('<?php the_field('leadership_team_background_image'); ?>');">
	<div class="container-fluid">
		<div class="container">
			<div class="col-md-6">
				<div class="arrange-second">
					<h2><?php the_field('leadership_team_title'); ?></h2>
					<?php the_field('leadership_team_description'); ?>
					<a href="<?php the_field('get_in_touch_link'); ?>" class="getin-touch"><?php the_field('get_in_touch_text'); ?></a>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>

<section class="triathlon-team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-2 custom-arrange">
				<h2><?php the_field('triathlon_team_title'); ?></h2>
				<?php the_field('triathlon_team_description'); ?>
				<a href="<?php the_field('play_intro_link'); ?>" class="play"><?php the_field('play_intro_text'); ?></a>
				<a href="<?php the_field('learn_more_link'); ?>" class="learn"><?php the_field('learn_more_text'); ?></a>
			</div>
			<div class="col-md-6 backimage" style="background:url('<?php the_field('triathlon_team_background_image'); ?>');">
				
			</div>
		</div>
	</div>
</section>

<section class="partners">
	<div class="container-fluid">
		<div class="container">
		<div class="row">
			<div class="col-md-3">
			 
				<h3><?php the_field('site_provided_title'); ?></h3>
				<img src="<?php the_field('site_provided_logo_image'); ?>">
			</div>
			
			<div class="col-md-9">
			<h3><?php the_field('sponsors_title'); ?></h3>
				<?php logo_slider(); ?>
			</div>
	      </div>
		</div>
	</div>
</section>

<section class="fooer-customnav">
	<div class="container-fluid">
		<div class="row">
			<div class="footer-nav">
				<?php dynamic_sidebar('sidebar-6'); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>