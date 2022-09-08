<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soleo-createape
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text"
      href="#primary"><?php esc_html_e( 'Skip to content', 'soleo-createape' ); ?></a>

    <!-- <header id="masthead" class="site-header grid--3-cols"> -->
    <header id="masthead" class="site-header">
      <div class="site-header__logo">
        <a href="/">
          <?php the_custom_logo(); ?>
        </a>
      </div>
      <nav class="site-header__main-nav">
        <!-- <ul class="main-nav-list">
          <li><a class="link" href="javascript:;">Solutions</a>
            <svg width="12" height="6" class="icon" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.5 0.75L6 5.25L10.5 0.75" stroke="#2F3037" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>

            <ul>
              <li> <a href="javascript:;">Solution Title #1</a></li>
              <li> <a href="javascript:;">Solution Title #1</a></li>
              <li> <a href="javascript:;">Solution Title #1</a></li>
              <li> <a href="javascript:;">Solution Title #1</a></li>
            </ul>
          </li>
          <li><a class="link" href="javascript:;">About</a></li>
          <li><a class="link" href="javascript:;">Contact</a></li>
          <li><a class="link" href="javascript:;">Resources</a></li>
        </ul> -->

        <?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
									?>

      </nav>

      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>


      <div class="site-header__main-nav-info">
        <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
            stroke="#2F3037" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M20.9999 20.9999L16.6499 16.6499" stroke="#2F3037" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <p class="phone-no">(833) 389-5800</p>
        <a class="btn nav-cta" href="javascript:;">Try for free</a>
      </div>

    </header><!-- #masthead -->