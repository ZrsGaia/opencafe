<?php get_header(); ?>

<div class="top">

  <div class="top-menu">
    <div class="top-menu__inner">

      <h1 class="top__logo wow fadeIn">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo_dark.svg" alt="<?php bloginfo('name') ?>">
        </a>
      </h1>

      <?php
      //　グローバルメニューを動的に表示する
      wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'global', //グローバルメニューをここに表示すると指定
          'container' => 'nav',
          'container_class' => 'global-nav',
          'menu_class' => 'global-nav__list',
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
          'container_class' => 'global-nav-sns',
          'menu_class' => 'global-nav-sns__list',
        )
      );
      ?>

    </div>
  </div>
  <div class="main-visual">



    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">

        <!-- Slides -->
        <div class="swiper-slide">
          <div class="slide-img">
            <picture>
              <!-- スマホ時 -->
              <source srcset="<?php echo get_template_directory_uri() ?>/img/sp/img_mainvisual1_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual1.png" alt="店内の様子1">
            </picture>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-img">
            <picture>
              <!-- スマホ時 -->
              <source srcset="<?php echo get_template_directory_uri() ?>/img/sp/img_mainvisual2_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual2.png" alt="店内の様子2">
            </picture>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-img">
            <picture>
              <!-- スマホ時 -->
              <source srcset="<?php echo get_template_directory_uri() ?>/img/sp/img_mainvisual3_sp.png" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual3.png" alt="店内の様子3">
            </picture>

          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>



      <div class="main-visual__logo wow fadeIn">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo_light.svg" alt="<?php bloginfo('name') ?>">
        </a>
      </div>



      <div class="main-visual__lead wow fadeIn">
        <h2>パスタとコーヒーが<br class="is-sp">とってもおいしい、<br>ほっと落ち着くのんびり空間。</h2>
      </div>


      <!-- ピックアップする記事の配列を作成 -->
      <?php $args = array(
        'post_type' => 'post', //通常記事
        'tag' => 'pickup', //ピックアップのタグがついた投稿を対象
        'orderby' => 'DESC', //最新の
        'posts_per_page' => 1, //表示する最大記事数
      );

      $query = new WP_Query($args);
      ?>


      <?php if ($query->have_posts()) : ?>

        <div class="main-visual__pickup wow fadeIn">

          <!-- ピックアップ記事を表示 -->
          <?php while ($query->have_posts()) : $query->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
              <div class="main-visual__pickup-content">

                <div class="main-visual__pickup-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('my_thumbnail');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>
                <div class="main-visual__pickup-tag">
                  <div class="tag-ribbon"><span><?php my_the_post_category(false); ?></span></div>
                </div>
                <div class="main-visual__pickup-meta">
                  <div class="main-visual__pickup-date">
                    <?php the_time('Y.0n.0j'); ?>
                  </div>
                  <div class="main-visual__pickup-title">
                    <?php the_title(); ?>
                  </div>
                </div>
              </div>
            </a>

          <?php endwhile; ?>

        </div>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </div>
  </div>
</div>

<section class="section concept wow fadeIn" id="concept">

  <div class="inner concept__inner">

    <div class="concept__content">

      <h3 class="section__head-main concept__head">
        CONCEPT
        <span class="section__head-sub concept__head-sub">当店のこだわり</span>
      </h3>

      <div class="concept__title">
        最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ
      </div>

      <div class="concept__message-main">
        ダミー_国内外から賞賛を<br>
        受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
      </div>

      <div class="concept__message-sub">
        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
      </div>

      <div class="concept__more-link">
        <a class="btn-border" href="<?php echo esc_url(home_url('/concept/')) ?>">詳しくはこちら</a>
      </div>

    </div>

    <div class="concept__img">
      <img src="<?php echo get_template_directory_uri() ?>/img/img_concept.png" alt="コンセプト画像">
    </div>

  </div>

</section>

<section class="section special-lunch wow fadeIn" id="special-lunch">
  <div class="inner special-lunch__inner">
    <h3 class="section__head-main">
      SPECIAL LUNCH SET
      <span class="section__head-sub">今月のスペシャルランチセット</span>
    </h3>

    <div class="special-lunch__content">

      <div class="special-pasta__items">

        <?php $counter = 1;
        if (have_rows("lunch_$counter")) : ?>
          <?php while (have_rows("lunch_$counter")) : the_row(); ?>

            <!-- 限定ランチの数だけ繰り返す -->
            <?php if ($counter <= 4) : ?>
              <div class="special-pasta__item">
                <div class="special-pasta__img">
                  <img src="<?php the_sub_field('lunch' . $counter . '-image'); ?>" alt="<?php the_sub_field('lunch' . $counter . '-name'); ?>">
                </div>

                <div class="special-pasta__content">
                  <div class="special-pasta__icon">
                    <!-- 数字をアルファベットに変換 -->
                    <?php echo chr(64 + $counter); ?>
                  </div>

                  <div class="special-pasta__title">
                    <?php the_sub_field("lunch$counter-title"); ?>
                  </div>
                </div>
              </div>

            <?php endif;
            $counter++; ?>

        <?php endwhile;
        endif; ?>

      </div>


      <div class="special-lunch__set">
        <div class="special-lunch__img">
          <img src="<?php echo get_template_directory_uri() ?>/img/img_lunch-detail.png" alt="">
        </div>
        <div class="special-lunch__meta">
          <div class="special-lunch__title">
            スペシャルランチセット<br><span>【選べる3品】</span>
          </div>
          <div class="special-lunch__price">
            1,280 yen
          </div>

          <div class="special-lunch__time">
            （11:00 AM〜14:00 PMまで)
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="section menu wow fadeIn" id="menu">
  <div class="inner menu__inner">
    <h3 class="section__head-main">
      GRAND MENU
      <span class="section__head-sub">グランドメニュー</span>
    </h3>

    <div class="menu__content">

      <?php
      $genre_query = new WP_Query(
        array(
          'post_type' => 'menu', //カスタム投稿タイプを指定
          'posts_per_page' => 3, //表示する最大記事数
          'orderby' => 'title', //順番
          'order' => 'ASC', //昇順

          'tax_query' => array(
            array(
              'taxonomy' => 'genre', //タクソノミーを指定
              'terms'    => 'pasta', //パスタのジャンル
              'field'    => 'slug',
            ),
          ),
        )
      );
      ?>

      <div class="menu__title">
        パスタ
      </div>

      <?php if ($genre_query->have_posts()) : ?>

        <div class="menu__items">

          <?php while ($genre_query->have_posts()) : ?>

            <?php $genre_query->the_post(); ?>

            <div class="menu__item">
              <div class="menu__item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('my_thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
              </div>

              <div class="menu__item-meta">
                <div class="menu__item-title">
                  <?php the_title(); ?>
                </div>

                <div class="menu__item-price">
                  <?php the_field('price'); ?> yen
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

      <?php endif; ?>


      <?php
      $genre_query = new WP_Query(
        array(
          'post_type' => 'menu', //カスタム投稿タイプを指定
          'posts_per_page' => 3, //表示する最大記事数
          'orderby' => 'title', //順番
          'order' => 'ASC', //昇順


          'tax_query' => array(
            array(
              'taxonomy' => 'genre', //タクソノミーを指定
              'terms'    => 'salad', //サラダのジャンル
              'field'    => 'slug',
            ),
          ),
        )
      );
      ?>

      <div class="menu__title">
        サラダ
      </div>

      <?php if ($genre_query->have_posts()) : ?>

        <div class="menu__items">

          <?php while ($genre_query->have_posts()) : ?>

            <?php $genre_query->the_post(); ?>

            <div class="menu__item">
              <div class="menu__item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('my_thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
              </div>

              <div class="menu__item-meta">
                <div class="menu__item-title">
                  <?php the_title(); ?>
                </div>

                <div class="menu__item-price">
                  <?php the_field('price'); ?> yen
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

      <?php endif; ?>




      <?php
      $genre_query = new WP_Query(
        array(
          'post_type' => 'menu', //カスタム投稿タイプを指定
          'posts_per_page' => 6, //表示する最大記事数
          'orderby' => 'title', //順番
          'order' => 'ASC', //昇順


          'tax_query' => array(
            array(
              'taxonomy' => 'genre', //タクソノミーを指定
              'terms'    => 'breadsweets', //パン&スイーツのジャンル
              'field'    => 'slug',
            ),
          ),
        )
      );
      ?>

      <div class="menu__title">
        パン &amp; スイーツ
      </div>

      <?php if ($genre_query->have_posts()) : ?>

        <div class="menu__items">

          <?php while ($genre_query->have_posts()) : ?>

            <?php $genre_query->the_post(); ?>

            <div class="menu__item">
              <div class="menu__item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('my_thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
              </div>

              <div class="menu__item-meta">
                <div class="menu__item-title">
                  <?php the_title(); ?>
                </div>

                <div class="menu__item-price">
                  <?php the_field('price'); ?> yen
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

      <?php endif; ?>


      <div class="menu__title">
        ドリンク
      </div>

      <div class="drink-items">

        <div class="drink-item__img">
          <img src="<?php echo get_template_directory_uri() ?>/img/img_drink1.png" alt="">
        </div>

        <div class="drink-item__lists">


          <?php
          $genre_query = new WP_Query(
            array(
              'post_type' => 'menu', //カスタム投稿タイプを指定
              'posts_per_page' => 6, //表示する最大記事数
              'orderby' => 'title', //順番
              'order' => 'ASC', //昇順


              'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミーを指定
                  'terms'    => 'drink-coffee', //ドリンクのジャンル
                  'field'    => 'slug',
                ),
              ),
            )
          );
          ?>

          <div class="drink-item__list">
            <div class="drink-item__list-title">コーヒー</div>

            <?php if ($genre_query->have_posts()) : ?>


              <?php while ($genre_query->have_posts()) : ?>

                <?php $genre_query->the_post(); ?>

                <dl>
                  <dt> <?php the_title(); ?></dt>
                  <dd><?php the_field('price'); ?> yen</dd>
                </dl>

              <?php endwhile; ?>
            <?php endif; ?>
          </div>




          <?php
          $genre_query = new WP_Query(
            array(
              'post_type' => 'menu', //カスタム投稿タイプを指定
              'posts_per_page' => 6, //表示する最大記事数
              'orderby' => 'title', //順番
              'order' => 'ASC', //昇順

              'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミーを指定
                  'terms'    => 'drink-tea', //ドリンクのジャンル
                  'field'    => 'slug',
                ),
              ),
            )
          );
          ?>

          <div class="drink-item__list">

            <div class="drink-item__list-title">紅茶</div>
            <?php if ($genre_query->have_posts()) : ?>

              <?php while ($genre_query->have_posts()) : ?>

                <?php $genre_query->the_post(); ?>

                <dl>
                  <dt> <?php the_title(); ?></dt>
                  <dd><?php the_field('price'); ?> yen</dd>
                </dl>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>



          <?php
          $genre_query = new WP_Query(
            array(
              'post_type' => 'menu', //カスタム投稿タイプを指定
              'posts_per_page' => 6, //表示する最大記事数
              'orderby' => 'title', //順番
              'order' => 'ASC', //昇順

              'tax_query' => array(
                array(
                  'taxonomy' => 'genre', //タクソノミーを指定
                  'terms'    => 'drink-soft', //ドリンクのジャンル
                  'field'    => 'slug',
                ),
              ),
            )
          );
          ?>

          <div class="drink-item__list">

            <div class="drink-item__list-title">ソフトドリンク</div>
            <?php if ($genre_query->have_posts()) : ?>

              <?php while ($genre_query->have_posts()) : ?>

                <?php $genre_query->the_post(); ?>

                <dl>
                  <dt> <?php the_title(); ?></dt>
                  <dd><?php the_field('price'); ?> yen</dd>
                </dl>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>

        </div>
      </div>

    </div>

    <div class="menu__other-link">

      <a class="btn-border" href="<?php echo esc_url(home_url('/menu/')) ?>">その他のメニュー</a>

    </div>
  </div>

</section>

<section class="section gallery wow fadeIn" id="gallery">
  <div class="inner gallery__inner">
    <h3 class="section__head-main gallery__head ">
      GALLERY
      <span class="section__head-sub">ギャラリー</span>
    </h3>


    <div class="gallery__images">

      <div class="gallery__image">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_gallery1.png" alt="">
      </div>
      <div class="gallery__image">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_gallery2.png" alt="">
      </div>
      <div class="gallery__image">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_gallery3.png" alt="">
      </div>
      <div class="gallery__image">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_gallery4.png" alt="">
      </div>

    </div>

    <div class="gallery__instagram-link">

      <a class="btn-border" href="https://www.instagram.com/">インスタグラムを見る</a>

    </div>



  </div>


</section>

<section class="section news wow fadeIn" id="news">
  <div class="inner news__inner">
    <h3 class="section__head-main">
      NEWS
      <span class="section__head-sub">お知らせ</span>
    </h3>

    <div class="news__items">


      <?php
      $news_query = new WP_Query(
        array(
          'post_type' => 'post', //投稿タイプを指定
          'posts_per_page' => 1, //表示する最大記事数
          'order' => 'DESC', //降順
        )
      );
      ?>

      <!-- 一番最新のニュースを表示 -->
      <div class="news__item-top">
        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

            <div class="news__item">
              <a href="<?php the_permalink(); ?>">
                <div class="news__item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    //アイキャッチ画像が設定されていれば大サイズで表示
                    the_post_thumbnail('large');
                  } else {
                    //なければnoimage画像をデフォルトで表示
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>
                <div class="news__item-tag">
                  <div class="tag-ribbon"><span><?php my_the_post_category(false); ?></span></div>
                </div>
                <div class="news__item-title">
                  <?php the_title(); ?>
                </div>
                <div class="news__item-text">
                  <?php the_excerpt(); ?>
                </div>
                <div class="news__item-date"><?php the_time('Y.m.d'); ?></div>
              </a>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>



      <?php
      $news_query = new WP_Query(
        array(
          'post_type' => 'post', //投稿タイプを指定
          'posts_per_page' => 4, //表示する最大記事数
          'order' => 'DESC', //降順
          'offset' => 1 //最新の記事を除く
        )
      );
      ?>

      <div class="news__items-sub">

        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

            <div class="news__item wow fadeIn">
              <a href="<?php the_permalink(); ?>">
                <div class="news__item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    //アイキャッチ画像が設定されていれば大サイズで表示
                    the_post_thumbnail('large');
                  } else {
                    //なければnoimage画像をデフォルトで表示
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>
                <div class="news__item-tag">
                  <div class="tag-ribbon"><span><?php my_the_post_category(false); ?></span></div>
                </div>
                <div class="news__item-title">
                  <?php the_title(); ?>
                </div>
                <div class="news__item-date"><?php the_time('Y.m.d'); ?></div>
              </a>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>

    </div>

    <div class="news__link">
      <a class="btn-border" href=" <?php echo esc_url(home_url('/news/')) ?>">過去のお知らせ</a>
    </div>

  </div>

</section>

<?php get_footer(); ?>