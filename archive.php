<?php get_header(); ?>

<div class="top-sub is-news">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">NEWS</h2>
    <div class="top-sub__title-sub">お知らせ</div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="news-sub">

  <div class="inner news-sub__inner">

    <div class="news-sub__content">

      <?php if (have_posts()) : ?>

        <div class="news-sub__article">

          <div class="news-sub__category">
            <?php if (is_category()) {
              the_archive_title();
            } ?>
          </div>

          <div class="news-sub__items">
            <?php
            while (have_posts()) :
              the_post();
            ?>
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

          </div>

          <!-- pagenation -->
          <?php get_template_part('./template-parts/pagination') ?>

        </div>

      <?php endif; ?>


      <!-- sidebar -->
      <?php get_sidebar(); ?>

    </div>

  </div>
</section>


<?php get_footer(); ?>