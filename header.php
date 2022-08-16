<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- not Crawling -->
  <meta name="robots" content="noindex" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>

<body>

  <div class="wrap">

    <header class="header">


      <!-- フロントページ以外にはサブクラスを付与 -->
      <div class="drawer-icon <?php if (!is_home() && !is_front_page()) {
                                echo 'is-sub';
                              } ?>">

        <div class="drawer-icon-background"></div>

        <div class="drawer-icon__bars">
          <div class="drawer-icon__bar1"></div>
          <div class="drawer-icon__bar2"></div>
          <div class="drawer-icon__bar3"></div>
        </div>
      </div>

      <div class="drawer-content">

        <div class="drawer-content__logo">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo_light.svg" alt="">
        </div>

        <?php
        //　ドロワーメニューを動的に表示する
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
            'container' => 'nav',
            'container_class' => 'drawer-nav',
            'menu_class' => 'drawer-nav__list',
          )
        );
        ?>

        <?php
        //　ソーシャルメニューを動的に表示する
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'social', //ソーシャルメニューをここに表示すると指定
            'container' => 'nav',
            'container_class' => 'drawer-nav-sns',
            'menu_class' => 'drawer-nav-sns__list',
          )
        );
        ?>

      </div>

      <div class="drawer-background"></div>
    </header>


    <main>