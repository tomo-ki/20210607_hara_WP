<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WordPress課題
  </title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header flex-column">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header_icon">
      <img src="<?php echo get_template_directory_uri(); ?>/images/estramedia__logo.png" alt="header_icon">
    </a>
    <nav class="header_nav">
      <li class="nav_list"><a href="<?php echo get_category_link(2); ?>">HTML</a></li>
      <li class="nav_list"><a href="<?php echo get_category_link(3); ?>">CSS</a></li>
      <li class="nav_list"><a href="<?php echo get_category_link(4); ?>">JavaScript</a></li>
      <li class="nav_list"><a href="<?php echo get_category_link(5); ?>">PHP</a></li>
      <li class="nav_list"><a href="<?php echo get_category_link(6); ?>">MySQL</a></li>
    </nav>
  </header>