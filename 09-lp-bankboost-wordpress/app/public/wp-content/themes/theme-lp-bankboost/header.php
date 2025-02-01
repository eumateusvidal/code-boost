<!DOCTYPE html>
<html lang="pt">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Primary Meta Tags -->
  <title><?php bloginfo('name') ?> <?php wp_title('-') ?> </title>
  <meta name="title" content="Bankboost -  Abra sua conta, é só baixar o app!" />
  <meta name="description" content="Desperte seu potencial financeiro com o Bankboost!" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://bankboost-matt.netlify.app/" />
  <meta property="og:title" content="Bankboost -  Abra sua conta, é só baixar o app!" />
  <meta property="og:description" content="Desperte seu potencial financeiro com o Bankboost!" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(  )?>/img/00. SEO/share-og.jpg" />


  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://bankboost-matt.netlify.app/" />
  <meta property="twitter:title" content="Bankboost -  Abra sua conta, é só baixar o app!" />
  <meta property="twitter:description" content="Desperte seu potencial financeiro com o Bankboost!" />
  <meta property="twitter:image" content="<?php echo get_template_directory_uri(  )?>/img/00. SEO/share-og.jpg" />

  <!-- Meta Tags Generated with https://metatags.io -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(  )?>/css/main.css">
  <link rel="icon" type="img/png" href="<?php echo get_template_directory_uri(  )?>/img/00. SEO/favicon.png">
  <?php wp_head(); ?>
</head>
<body>

  <header>
    <div class="container">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(  )?>/img/01. header/Vector.svg" alt="logo bank boost">
      </a>
      <div class="right">
        <nav>

        <?php
          $args = array(
            'menu' => 'Header Principal',
            'theme_location' => 'header-principal',
            'container' => false
          );
          wp_nav_menu( $args );
        ?>
          <!-- <a href="<?php echo get_permalink(get_page_by_path(''))?>">Produtos Boost</a>
          <a href="<?php echo get_permalink(get_page_by_path(''))?>">Conta digital PJ</a>
          <a href="<?php echo get_permalink(get_page_by_path(''))?>">Quem somos</a>
          <a href="<?php echo get_permalink(get_page_by_path(''))?>">Blog</a>
          <a href="<?php echo get_permalink(get_page_by_path(''))?>">Ajuda</a> -->
        </nav>
        <button class="btn">Abra sua conta digital</button>
      </div>
      <button>
        <img src="<?php echo get_template_directory_uri(  )?>/img/01. header/btn-mobile.svg" alt="" class="btn-mobile">
      </button>
    </div>
  </header>