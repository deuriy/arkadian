<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
		<?php wp_head(); ?>
  </head>
  <body>
    <div class="Wrapper Wrapper-frontpage">
      <header class="Header">
        <div class="Container Container-flex Container-justifyBetween Container-alignCenter Header_container">
          <div class="Header_col">
            <div class="Header_logo">
							<?php
								$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
								if ($custom_logo__url):
							?>
								<a class="Header_logoLink" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img class="Header_logoImg" src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип"></a>
							<?php endif; ?>
						</div>
          </div>
          <div class="Header_col">
            <div class="MenuHamburger Header_menuHamburger hidden-mdPlus">
							<span class="MenuHamburger_line"></span>
							<span class="MenuHamburger_line"></span>
							<span class="MenuHamburger_line"></span>
						</div>
						<?php wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => 'nav',
							'container_class' => 'MainMenu Header_mainMenu',
							'menu_class' => 'MainMenu_list',
							'walker' => new My_Walker_Nav
						)); ?>
          </div>
          <div class="Header_col">
						<?php
							$phone = get_field('phone', 'option');
							$email = get_field('e-mail', 'option');
						?>
            <div class="Header_contacts">
							<?php if ($phone): ?>
              	<div class="Header_contact">
									<a class="Header_phone" href="tel:<?php print $phone; ?>">
										<?php print $phone; ?>
									</a>
								</div>
							<?php endif; ?>
							<?php if ($email): ?>
								<div class="Header_contact">
									<a class="Header_email" href="mail:<?php print $email; ?>">
										<?php print $email; ?>
									</a>
								</div>
							<?php endif; ?>
            </div>
          </div>
        </div>
      </header>