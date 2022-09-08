<!-- Get all the fields in the Section With Info and 3 Columns section -->
<?php 
  $headingText = get_sub_field('heading_text'); 
  $paragraphText = get_sub_field('paragraph_text'); 
  $columnContent = get_sub_field('column_content'); 
  $buttonText = get_sub_field('button_text'); 
  $buttonUrl = get_sub_field('button_url'); 
?>

<!-- Get the most section -->
<section class="get-the-most-section">
  <div class="container">
    <div class="intro-text center-text">

      <?php if( !empty($headingText)): ?>
      <h2 class="heading"><?php echo $headingText; ?></h2>
      <?php endif; ?>

      <?php if( !empty($paragraphText)): ?>
      <p class="description">
        <?php echo $paragraphText; ?>
      </p>
      <?php endif; ?>
    </div>

    <div class="content grid--3-cols">
      <?php foreach($columnContent as $columnContents): ?>

      <div class="info-box box--1">
        <div class="icon-box">
          <img src="<?php echo esc_url($columnContents['icon_image']['url']); ?>" class="icon"
            alt="<?php echo esc_attr($columnContents['icon_image']['alt']); ?>">
        </div>

        <div class="data-box">

          <?php echo $columnContents['heading_text']; ?>


          <?php echo $columnContents['paragraph_text']; ?>


        </div>


      </div>
      <?php endforeach; ?>


    </div>



    <div class="cta center-text">
      <?php if( !empty($buttonText) && !empty($buttonUrl)): ?>

      <a href="<?php echo $buttonUrl; ?>" class="btn btn--outline"><?php echo $buttonText; ?></a>

      <?php endif; ?>
    </div>

  </div>
</section>