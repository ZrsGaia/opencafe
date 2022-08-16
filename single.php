<?php get_header(); ?>

<div class="top-sub is-news">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">NEWS</h2>
    <div class="top-sub__title-sub">お知らせ</div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="news-sub-detail">

  <div class="inner news-sub-detail__inner">

    <?php if (have_posts()) : ?>

      <div class="news-sub-detail__items">

        <?php while (have_posts()) : the_post(); ?>


          <div class="news-sub-detail__img">
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

          <h1 class="news-sub-detail__title">
            <?php the_title(); ?></h1>


          <div class="news-sub-detail__meta">
            <div class="news-sub-detail__date"><?php the_time('Y.m.d'); ?></div>
            <div class="news-sub-detail__category"><?php my_the_post_category(true); ?></div>
          </div>

          <div class="news-sub-detail__body wow fadeIn">

            <?php
            //ブログ本文の表示
            the_content();
            ?>

          <?php endwhile; ?>

          </div>

        <?php endif; ?>


      </div>

      <!-- 記事のリンク -->
      <div class="post-links">
        <div class="post-link__prev">
          <?php $preview_arrow = '<img src="' . esc_url(get_template_directory_uri()) . '/img/arrow-prev.svg">'; ?>
          <?php previous_post_link($preview_arrow . '%link', '前の記事'); ?>
        </div>

        <a href="<?php echo home_url('/news/'); ?>">
          <div class="post-link__list">記事一覧</div>
        </a>

        <div class="post-link__next">
          <?php $next_arrow = '<img src="' . esc_url(get_template_directory_uri()) . '/img/arrow-next.svg">'; ?>
          <?php next_post_link('%link' . $next_arrow, '次の記事'); ?>
        </div>
      </div>


      <!-- 関連記事 -->
      <?php get_template_part('template-parts/relation-news'); ?>

</section>


<?php get_footer(); ?>