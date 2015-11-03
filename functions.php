<?php
  // Customizer options function.
  function vet_register_theme_customizer( $vet_theme ) {
    // Remove background image section.
    $vet_theme->remove_section('background_image');

    // Rename Header option to Site Title.
    $vet_theme->get_section('title_tagline')->title = __('Site Title');
    // Rename Colors section to something more descriptive.
    $vet_theme->get_section('colors')->title = __('Text and Background Color');
    // Rename Header Image option to Billboard Image
    $vet_theme->get_section('header_image')->title = __('Billboard Image');
  }

  add_action('customize_register', 'vet_register_theme_customizer');

  // Add Header Image options to Customizer.
  // Allows customization of image and site header text color.
  // Lets users know what height and width the image should be.
  $defaults = array(
    'default-image' => get_template_directory_uri() . '/images/puppy-love.jpg',
    'default-text-color' => red,
    'height' => 500,
    'width' => 980,
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => 'vet_style_header'
    );

  add_theme_support('custom-header', $defaults);

  // Background color options for customizer.
  $defaults = array(
    'default-color' => green
    );

  add_theme_support('custom-background', $defaults);

  function vet_style_header() {

    $text_color = get_header_textcolor();
    ?>

    <style type="text/css">

      .site-title a {
        color: #<?php echo esc_attr($text_color); ?>;
      }

      <?php if (display_header_text() != true): ?>
      .site-title {
        display: none;
      }
      <?php endif; ?>

    </style>
    <?php
  }

  // Main site CSS.
  // Add additional CSS files here.
  function theme_styles() {

    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  }

  add_action('wp_enqueue_scripts', 'theme_styles');

  // Main site JS files.
  // Add additional JS files here.
  function theme_js() {

    wp_register_script('main_js', get_template_directory_uri() . 'js/app.js', array('jquery'));
  }

  add_action('wp_enqueque_scripts', 'theme_js');

?>
