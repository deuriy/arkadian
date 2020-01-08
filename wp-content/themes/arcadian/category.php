<?php get_header(); ?>
<main class="MainContent">
	<div class="PortfolioPage">
		<div class="Container">
			<h2 class="SectionTitle PortfolioPage_title">Портфолио</h2>
			<div class="Filter PortfolioPage_filter">
				<ul class="Filter_list">
					<li class="Filter_item" data-filter="all">Все</li>
					<?php
						$parent_cat = get_category_by_slug('portfolio');
						$categories = get_categories('parent='.$parent_cat->cat_ID.'&hide_empty=0');
						foreach ($categories as $category):
							echo "<li class=\"Filter_item\" data-filter=\".$category->slug\">$category->name</li>\n";
						endforeach;
					?>
				</ul>
			</div>
			<div class="PortfolioPage_projectList">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="mix PortfolioPage_projectCol<?php
					$categories = get_the_category($post->ID);
					foreach ($categories as $category):
						echo ' ' . $category->category_nicename;
					endforeach;
					?>">
						<?php
							$thumbnail_id = get_post_thumbnail_id();
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
						?>
						<a class="ProjectBlock PortfolioPage_projectBlock" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="gallery-<?php echo $post->ID; ?>">
							<div class="ProjectBlock_photo">
								<img class="ProjectBlock_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
								<div class="ProjectBlock_category"><?php echo get_the_category()[0]->name; ?></div>
							</div>
							<div class="ProjectBlock_name"><?php the_title(); ?></div>
						</a>
						<?php
							$gallery_images = get_field('gallery_images');
							if ($gallery_images):
						?>
							<div class="GalleryPhotos" style="display: none;">
								<?php foreach ($gallery_images as $item):	?>
									<a href="<?php echo $item['img']['url']; ?>" data-fancybox="gallery-<?php echo $post->ID; ?>" data-caption="<?php echo $item['img']['caption']; ?>"></a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; else : ?>
					<p>Записей нет.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>