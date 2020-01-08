<?php get_header(); ?>
<main class="MainContent">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Цикл WordPress -->
		<div class="Article">
			<div class="Container Article_container">
				<h1 class="SectionTitle Article_title"><?php the_title(); ?></h1>
				<div class="Article_text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; else : ?>
		<p>Записей нет.</p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>