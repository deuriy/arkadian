			<footer class="Footer">
        <div class="Container Container-flex Container-justifyBetween Container-alignCenter Container-small Container-footer">
          <div class="Footer_col">
						<?php
							$footer_logo = get_field('logo', 'option');
							$copyright = get_field('copyright', 'option');

							if ($footer_logo):
						?>
							<div class="Footer_logo">
								<a class="Footer_logoLink" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
									<img class="Footer_logoImg" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>">
								</a>
							</div>
						<?php endif; ?>
						<?php if ($copyright) : ?>
							<div class="Footer_copyright"><?php echo $copyright; ?></div>
						<?php endif; ?>
          </div>
          <div class="Footer_col">
            <div class="Footer_development">
              <div class="Footer_developmentText">Разработано &nbsp;в &nbsp;<a href="https://oxbox.ru/" target="_blank">OXBOX</a></div><a href="https://oxbox.ru/" target="_blank"><img class="Footer_developmentLogo" src="<?php echo get_template_directory_uri(); ?>/img/oxbox_logo.png" alt="Oxbox logo"></a>
            </div>
          </div>
        </div>
      </footer>
		</div>
		<div class="ContactFormPopup" id="ContactFormPopup" style="display: none;">
			<?php echo do_shortcode('[contact-form-7 id="23" title="Заполните простую форму обращения" html_class="ContactForm"]'); ?>
		</div>
		<?php wp_footer(); ?>
  </body>
</html>