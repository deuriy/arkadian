<?php get_header(); ?>
<main class="MainContent">
	<div class="Welcome PageSection">
		<div class="Welcome_col Welcome_col-left">
			<?php
				$welcome_textinfo = get_field('welcome_textinfo', 'option');
				if ($welcome_textinfo):
			?>
				<div class="Welcome_textWrapper wow slideInLeft">
					<?php if ($welcome_textinfo['logo']['url']): ?>
						<div class="Welcome_logo">
							<img src="<?php print $welcome_textinfo['logo']['url']; ?>" alt="<?php print $welcome_textinfo['logo']['alt']; ?>">
						</div>
					<?php endif; ?>
					<?php if ($welcome_textinfo['title']): ?>
						<div class="Welcome_title"><?php echo $welcome_textinfo['title']; ?></div>
					<?php endif;?>
					<?php if ($welcome_textinfo['text']): ?>
						<div class="Welcome_text"><?php echo $welcome_textinfo['text']; ?></div>
					<?php endif;?>
					<div class="Welcome_sepLinkWrap">
						<a class="SeparateLink" href="javascript: void(0)" data-fancybox data-src="#ContactFormPopup">
							<?php echo ($welcome_textinfo['order_link_text']) ? $welcome_textinfo['order_link_text'] : 'Заказать проект'; ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="Welcome_col">
			<?php
				$welcome_slider = get_field('welcome_slider', 'option');
				if ($welcome_slider):
			?>
				<div class="Welcome_slider wow slideInRight">
					<div class="swiper-container Swiper Swiper-welcome">
						<div class="swiper-wrapper">
							<?php foreach ($welcome_slider as $slide): ?>
								<div class="swiper-slide">
									<img class="Swiper_img" src="<?php echo $slide['slide']['url']; ?>" alt="<?php echo $slide['slide']['alt']; ?>">
								</div>
							<?php endforeach; ?>
						</div>
						<div class="SwiperPagination SwiperPagination-welcomeSlider Swiper_pagination"></div>
					</div>
					<a class="Arrow Welcome_arrow" href="#About"></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="About PageSection" id="About">
		<div class="Container Container-flex About_container">
			<div class="About_col About_col-left SectionLine SectionLine-about" data-section-number="1">
				<div class="About_textWrapper">
					<?php if (get_field('about_title', 'option')): ?>
						<h2 class="SectionTitle About_title"><?php the_field('about_title', 'option'); ?></h2>
					<?php endif; ?>
					<?php if (get_field('about_text', 'option')): ?>
						<div class="About_text">
							<?php the_field('about_text', 'option'); ?>
						</div>
					<?php endif; ?>
					<?php
						$about_statistics = get_field('about_statistics', 'option');
						if ($about_statistics):
					?>
						<ul class="About_results">
							<?php foreach ($about_statistics as $result): ?>
								<li class="About_result">
									<span class="About_number"><?php echo $result['number']; ?></span>
									<span class="About_resultTitle"><?php echo $result['name']; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<div class="About_sepLinkWrap">
						<a class="SeparateLink" href="javascript: void(0)" data-fancybox data-src="#ContactFormPopup">
							<?php echo (get_field('about_section_link_text', 'option')) ? get_field('about_section_link_text', 'option') : 'Получить констульцию'; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="About_col About_col-right wow slideInUp" data-wow-offset="350">
				<div class="About_photo">
					<?php
						$about_photo = get_field('about_photo', 'option');
						if ($about_photo):
					?>
						<img class="About_img" src="<?php echo $about_photo['url']; ?>" alt="<?php echo $about_photo['alt']; ?>">
						<div class="About_photoTitle"><?php echo $about_photo['title']; ?></div>
					<?php endif; ?>
					<?php
						$video_link = get_field('video_link', 'option');
						if ($video_link):
					?>
						<a class="PlayBtn About_playBtn" href="<?php echo $video_link; ?>" data-fancybox title="Открыть видео"></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="Portfolio PageSection" id="Portfolio">
		<div class="Container Container-medium SectionLine SectionLine-portfolio" data-section-number="2">
			<?php
				$cat = get_category_by_slug('portfolio');
				$category_link = get_category_link( $cat->cat_ID );
			?>
			<h2 class="SectionTitle Portfolio_title"><?php echo $cat->cat_name; ?></h2>
			<div class="Portfolio_description"><?php echo $cat->category_description; ?></div>
			<div class="Portfolio_projects">
				<?php
					$posts = get_posts('numberposts=4&category_name=portfolio');
					foreach ($posts as $key => $post):
						setup_postdata($post);
						
					$project_classes = '';
					$project_col_classes = '';
					$project_title_classes = '';

					if ($key % 2 != 0) {
						$project_classes = ' Project-rtl';
						$project_col_classes = ' Project_col-rightReverse';
						$project_title_classes = ' Project_title-noLine';
					}
				?>
				<div class="Project Portfolio_project<?php echo $project_classes; ?>">
					<div class="Project_col Project_col-left wow zoomIn" data-wow-offset="300">
						<?php
							$thumbnail_id = get_post_thumbnail_id();
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
						?>
						<a class="Project_photo" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="photo-<?php echo $post->ID; ?>">
							<img class="Project_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
							<?php if ($alt) : ?>
								<div class="Project_photoTitle"><?php echo $alt; ?></div>
							<?php endif; ?>
						</a>
					</div>
					<div class="Project_col wow fadeInRight Project_col-right<?php echo $project_col_classes; ?>" data-wow-offset="300">
						<h3 class="Project_title<?php echo $project_title_classes; ?>"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>
						<div class="Project_description"><?php the_content(); ?></div>
						<div class="Project_linkWrap">
							<a class="Project_link" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="gallery-<?php echo $post->ID; ?>">Смотреть проект</a>
						</div>
					</div>
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
				<?php	endforeach;	wp_reset_postdata(); ?>
			</div>
			<div class="SepLines">
				<div class="SepLines_btnWrap">
					<a class="BtnOutline" href="<?php echo $category_link; ?>">Смотреть все проекты</a>
				</div>
			</div>
		</div>
	</div>
	<div class="Services PageSection" id="Services">
		<div class="Container Container-medium SectionLine SectionLine-services SectionLine-greyText wow fadeInUp" data-section-number="3" data-wow-offset="250">
			<?php
				$cat = get_category_by_slug('services');
			?>
			<h2 class="SectionTitle Services_title"><?php echo $cat->cat_name; ?></h2>
			<div class="Services_description"><?php echo $cat->category_description; ?></div>
			<div class="Services_items">
				<?php
					$posts = get_posts('numberposts=4&category_name=services');
					foreach ($posts as $post):
						setup_postdata($post);
				?>
					<div class="Services_item">
						<a class="Service" href="<?php echo get_permalink(); ?>">
							<?php
								$thumbnail_id = get_post_thumbnail_id();
								$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
							?>
							<div class="Service_photo">
								<img class="Service_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
							</div>
							<h3 class="Service_name"><?php the_title(); ?></h3>
						</a>
					</div>
				<?php	endforeach;	wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="Services_bottom">
			<div class="Container Container-medium">
				<div class="SepLines SepLines-lightBg">
					<div class="SepLines_btnWrap">
						<a class="BtnOutline BtnOutline-darkText" href="javascript: void(0)" data-fancybox data-src="#ContactFormPopup">Заказать проект</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Partners PageSection" id="Partners">
		<div class="Container Container-medium SectionLine SectionLine-partners SectionLine-greyText" data-section-number="5">
			<?php if (get_field('partners_title', 'option')): ?>
				<h2 class="SectionTitle Partners_title"><?php the_field('partners_title', 'option'); ?></h2>
			<?php endif; ?>
			<?php if (get_field('partners_description', 'option')): ?>
				<div class="Partners_description"><?php the_field('partners_description', 'option'); ?></div>
			<?php endif; ?>
			<pre>
			<?php
				$partners_logos = get_field('logos', 'option');
				if ($partners_logos):
			?>
			</pre>
				<div class="Partners_logos">
					<?php
						foreach ($partners_logos as $key => $logo):
						$css_class = $logo['class_mod'] ? ' '.$logo['class_mod'] : '';

						if ($key < 4):
							$css_class .= ' slideInLeft';
						else :
							$css_class .= ' slideInRight';
						endif;
					?>
						<div class="LogoBox wow Partners_logo<?php echo $css_class; ?>" data-wow-offset="200">
							<img class="LogoBox_img" src="<?php echo $logo['img']['url']; ?>" alt="<?php echo $logo['img']['alt']; ?>">
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="Contacts PageSection" id="Contacts">
		<div class="Container Container-medium SectionLine SectionLine-greyText SectionLine-contacts" data-section-number="6">
			<?php if (get_field('contacts_title', 'option')): ?>
				<h2 class="SectionTitle Contacts_title"><?php the_field('contacts_title', 'option'); ?></h2>
			<?php endif; ?>
			<div class="Contacts_textWrapper">
				<?php if (get_field('contacts_address', 'option')): ?>
					<div class="Contacts_address"><?php the_field('contacts_address', 'option'); ?></div>
				<?php endif; ?>
				<div class="Contacts_row">
					<div class="Contacts_left">
						<?php
							$contacts_person = get_field('contact_person', 'option');
							foreach ($contacts_person as $person):
						?>
							<div class="Contacts_person">
								<?php if ($person['name']) : ?>
									<div class="Contacts_personName"><?php echo $person['name']; ?></div>
								<?php endif; ?>
								<?php if ($person['phone']) : ?>
									<div class="Contacts_phone">
										<a class="Contacts_phoneLink" href="tel:<?php echo $person['phone']; ?>">
											<?php echo $person['phone']; ?>
										</a>
									</div>
								<?php endif; ?>
								<?php if ($person['email']) : ?>
									<a class="Contacts_email" href="mailto:<?php echo $person['email']; ?>">
										<?php echo $person['email']; ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="Contacts_right">
						<?php
							$social_links = get_field('social_links', 'option');
							if ($social_links):
						?>
							<ul class="Contacts_social">
								<?php foreach ($social_links as $link): ?>
									<li class="Contacts_socItem">
										<a class="Contacts_socLink" href="<?php echo $link['url']; ?>" target="_blank">
											<?php echo $link['title']; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if (get_field('map', 'option')): ?>
				<div class="Contacts_map">
					<?php the_field('map', 'option'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>