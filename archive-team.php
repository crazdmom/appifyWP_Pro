<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header();
if (have_posts() ) ;?>


<section id="body" class="team-archive">

<div class="container">
	
<div class="row">
	<div class="span8 content">

		<header class="subhead" id="overview">
		<h1><?php
		if ( is_day() ) {
			get_the_date();
		} elseif ( is_month() ) {
			printf( get_the_date( _x( 'F Y', 'monthly archives date format', 'appifywp' ) ) );
		} elseif ( is_year() ) {
			printf(  get_the_date( _x( 'Y', 'yearly archives date format', 'appifywp' ) ) );
		} elseif ( is_tag() ) {
			printf( single_tag_title( '', false ) );
					// Show an optional tag description
			$tag_description = tag_description();
			if ( $tag_description )
				echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		} elseif ( is_category() ) {
			printf( single_cat_title( '', false ) );
					// Show an optional category description
			$category_description = category_description();
			if ( $category_description )
				echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
		} else {
			_e( 'Team', 'appifywp' );
		}
		?></h1>

		<hr/>
		<?php 
		$args = array( 'post_type' => 'team', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php
			$name = get_the_title();
			$title = get_post_meta($post->ID, 'info_role', true);
			$mug = theme_get_image( get_post_meta($post->ID, 'info_mug', true), 150, 150, true, $retina );
			$shortbio = get_post_meta($post->ID, 'info_short_bio', true);
		?>
		<div <?php post_class(); ?>>
			<div class="row-fluid">
				<div class="span4">
					 <?php if ($mug != ''){ ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><img id="mugshot" src="<?php echo $mug; ?>" alt="<?php the_title(); ?> icon" width="150" height="150" /></a>
					<?php } ?>
				</div>
				<div class="span8">
					<h2 class="archive-post-header">
						<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
					</h2>

					<?php if ($title != ''){ ?>
					<p class="title"><?php echo $title ?></p>
					<?php } ?>

					<?php if ($shortbio != ''){ ?>
					<p class="shortbio"><?php echo $shortbio ?></p>
					<?php } ?>

					<p class="moreinfo"><a href="<?php the_permalink(); ?>"><?php _e( 'More Info', 'appifywp' );?></a></p>
				</div>
			</div>
		
		</div><!-- /.post_class -->
			
			<?php endwhile; ?>
			<?php appifywp_content_nav('nav-below');?>

		</div><!-- /.span8 -->
		<?php get_sidebar(); ?>
</div><!-- .row-->
</div><!-- .container -->
</section>
<?php get_footer(); ?>