<!-- Get all the fields in the hero section -->
<?php 
  $heroHeadingText = get_sub_field('hero_heading_text'); 
  $heroParagraphText = get_sub_field('hero_paragraph_text'); 
  $heroLinkText = get_sub_field('hero_link_text'); 
  $heroLinkUrl = get_sub_field('hero_link_url'); 
  $heroImage = get_sub_field('hero_image'); 
?>



<!-- Hero Section -->
<section class="hero-section">
  <div class="container grid--2-cols">
    <div class="text-box">
      <!-- if hero title has value -->
      <?php if( !empty($heroHeadingText)): ?>
      <?php echo $heroHeadingText; ?>
      <?php endif; ?>

      <?php if (!empty($heroParagraphText)): ?>
      <?php echo $heroParagraphText; ?>
      <?php endif; ?>

      <?php if (!empty($heroLinkText) && !empty($heroLinkUrl)): ?>

      <a href="<?php echo $heroLinkUrl; ?>" class="btn btn--hero"><?php echo $heroLinkText; ?></a>

      <?php endif; ?>

    </div>

    <div class="img-box">
      <?php if (!empty($heroImage)): ?>

      <img src="<?php echo esc_url($heroImage['url']); ?>" class="hero-img"
        alt="<?php echo esc_attr($heroImage['alt']); ?>">

      <?php endif; ?>


      <!-- Delivered Calls Box -->
      <div class="info-box first">
        <div class="content">
          <div class="icon-box primary--bg">
            <svg width="29" height="30" class="phone-icon" viewBox="0 0 29 30" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18.1099 27.4575L18.1245 27.4663C19.3844 28.2688 20.8804 28.6174 22.3653 28.4546C23.8502 28.2918 25.2351 27.6273 26.2912 26.5709L27.2085 25.6521C27.6186 25.2419 27.849 24.6856 27.849 24.1056C27.849 23.5255 27.6186 22.9692 27.2085 22.559L23.3424 18.6915C23.1393 18.4882 22.8981 18.327 22.6326 18.2169C22.3671 18.1069 22.0825 18.0503 21.7951 18.0503C21.5078 18.0503 21.2232 18.1069 20.9577 18.2169C20.6922 18.327 20.451 18.4882 20.2479 18.6915V18.6915C19.8376 19.1016 19.2813 19.332 18.7013 19.332C18.1212 19.332 17.5649 19.1016 17.1547 18.6915L10.9656 12.5052C10.7623 12.3021 10.601 12.0609 10.491 11.7954C10.381 11.5299 10.3244 11.2453 10.3244 10.958C10.3244 10.6706 10.381 10.386 10.491 10.1205C10.601 9.85502 10.7623 9.61381 10.9656 9.41067C11.3757 9.00045 11.606 8.44415 11.606 7.8641C11.606 7.28406 11.3757 6.72776 10.9656 6.31754L7.09806 2.45004C6.68785 2.03995 6.13155 1.80957 5.5515 1.80957C4.97146 1.80957 4.41516 2.03995 4.00494 2.45004L3.08619 3.36879C2.02976 4.42488 1.36524 5.80979 1.20243 7.29467C1.03963 8.77955 1.38828 10.2755 2.19077 11.5355L2.19952 11.55C6.4381 17.8202 11.839 23.2201 18.1099 27.4575V27.4575Z"
                stroke="white" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

          </div>
          <div class="detail-box">
            <h3 class="heading">
              delivered Calls
            </h3>
            <h2 class="number">293</h2>

            <div class="upcalls-box">
              <svg width="12" height="7" class="arrow-icon" viewBox="0 0 12 7" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00049 5.84009L6.00049 1.00009L11.0005 5.84009" stroke="#4AB296" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <p class="percentage">15%</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Conversion Rate Box -->
      <div class="info-box second">
        <div class="content">
          <div class="icon-box blue--bg">
            <svg width="35" height="35" class="percentage-icon" viewBox="0 0 35 35" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.09375 17.5C1.09375 21.8512 2.82226 26.0242 5.89903 29.101C8.9758 32.1777 13.1488 33.9063 17.5 33.9063C21.8512 33.9063 26.0242 32.1777 29.101 29.101C32.1777 26.0242 33.9063 21.8512 33.9063 17.5C33.9063 13.1488 32.1777 8.9758 29.101 5.89903C26.0242 2.82226 21.8512 1.09375 17.5 1.09375C13.1488 1.09375 8.9758 2.82226 5.89903 5.89903C2.82226 8.9758 1.09375 13.1488 1.09375 17.5V17.5Z"
                stroke="white" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12.0312 22.9688L22.9688 12.0312" stroke="white" stroke-width="1.88" stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M10.9375 13.125C10.9375 13.7052 11.168 14.2616 11.5782 14.6718C11.9884 15.082 12.5448 15.3125 13.125 15.3125C13.7052 15.3125 14.2616 15.082 14.6718 14.6718C15.082 14.2616 15.3125 13.7052 15.3125 13.125C15.3125 12.5448 15.082 11.9884 14.6718 11.5782C14.2616 11.168 13.7052 10.9375 13.125 10.9375C12.5448 10.9375 11.9884 11.168 11.5782 11.5782C11.168 11.9884 10.9375 12.5448 10.9375 13.125Z"
                stroke="white" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M19.6875 21.875C19.6875 22.4552 19.918 23.0116 20.3282 23.4218C20.7384 23.832 21.2948 24.0625 21.875 24.0625C22.4552 24.0625 23.0116 23.832 23.4218 23.4218C23.832 23.0116 24.0625 22.4552 24.0625 21.875C24.0625 21.2948 23.832 20.7384 23.4218 20.3282C23.0116 19.918 22.4552 19.6875 21.875 19.6875C21.2948 19.6875 20.7384 19.918 20.3282 20.3282C19.918 20.7384 19.6875 21.2948 19.6875 21.875V21.875Z"
                stroke="white" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round" />
            </svg>


          </div>

          <div class="detail-box">
            <h3 class="heading">
              conversion rate
            </h3>
            <h2 class="number">50%</h2>

            <div class="upcalls-box">
              <svg width="12" height="7" class="arrow-icon" viewBox="0 0 12 7" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00049 5.84009L6.00049 1.00009L11.0005 5.84009" stroke="#4AB296" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <p class="percentage">7%</p>


            </div>
          </div>
        </div>
      </div>

      <!-- New Sales Box -->
      <div class="new-sales">
        <div class="content">
          <h3 class="title"> New Sales </h3>
          <div class="chart-image">
            <img src="<?php echo get_template_directory_uri() ?>/images/chart-1.png" class="chart-1" alt="chart shape">

            <img src="<?php echo get_template_directory_uri() ?>/images/chart-2.png" class="chart-2" alt="chart line">
          </div>

          <div class="numbers">
            <span class="chart-number">7/1</span>
            <span class="chart-number">7/2</span>
            <span class="chart-number">7/3</span>
            <span class="chart-number">7/4</span>
            <span class="chart-number">7/5</span>
            <span class="chart-number">7/6</span>
            <span class="chart-number">7/7</span>
            <span class="chart-number">7/8</span>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>