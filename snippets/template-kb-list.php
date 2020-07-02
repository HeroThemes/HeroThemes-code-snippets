<?php
/*
Template Name: Knowledge Base article list
*/
?>

<?php get_header(); ?>

<?php hkb_get_template_part( 'hkb-pageheader', 'single' ); ?>


<?php 
	//the query to get the articles, see usage here:-
	//https://developer.wordpress.org/reference/functions/query_posts/
	//example - all articles on one page
	query_posts( 'post_type=ht_kb&posts_per_page=-1' );
	//all posts, pagination
	//query_posts( 'post_type=ht_kb' ); 
?>

<div class="ht-page ht-page--sidebaroff">
<div class="ht-container">

	<div class="ht-page__content">

		<?php if ( have_posts() ) : ?>

			<ul class="ht-articlelist">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<li>
				<?php hkb_get_template_part( 'hkb-content-article' ); ?>
				</li>
			<?php endwhile; ?>
			</ul>

			<?php ht_posts_nav_link(); ?>

		<?php else : ?>

			<!-- no knowledge base articles -->

		<?php endif; ?>

	</div>

</div>
</div>

<?php
get_footer();
