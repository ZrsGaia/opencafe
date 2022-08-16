<?php get_header(); ?>

<div class="top-sub is-gift">
  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">GIFT</h2>
    <div class="top-sub__title-sub">ギフト・贈り物</div>
  </div>
</div>


<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="gift">

  <div class="inner gift__inner">

    <div class="gift__list wow fadeIn">

      <?php
      $product_query = new WP_Query(
        array(
          'post_type' => 'products', //カスタム投稿タイプを指定
          'order' => 'DESC', //降順
          'posts_per_page' => 1, //最新の一件
        )
      );
      ?>


      <div class="gift__items-top-block">

        <?php if ($product_query->have_posts()) : ?>
          <?php
          while ($product_query->have_posts()) :
            $product_query->the_post();
          ?>


            <div class="gift__item-top">
              <div class="gift__item-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('my_thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
              </div>
              <div class="gift__item-title">
                <?php the_title(); ?>
              </div>
              <div class="gift__item-price">
                <?php the_field('price'); ?> yen
              </div>
              <div class="gift__item-link">
                <a class="btn-color-reverse" href="#">ショップで確認する</a>
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $product_query = new WP_Query(
          array(
            'post_type' => 'products', //投稿タイプを指定
            'posts_per_page' => 4, //表示する最大記事数
            'order' => 'DESC', //降順
            'offset' => 1 //最新の記事を除く
          )
        );
        ?>

        <div class="gift__item-top-other">

          <?php if ($product_query->have_posts()) : ?>

            <div class="gift__items">
              <?php
              while ($product_query->have_posts()) :
                $product_query->the_post();
              ?>

                <div class="gift__item">
                  <div class="gift__item-img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('my_thumbnail');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                    ?>
                  </div>
                  <div class="gift__item-title">
                    <?php the_title(); ?>
                  </div>
                  <div class="gift__item-price">
                    <?php the_field('price'); ?> yen
                  </div>
                  <div class="gift__item-link">
                    <a class="btn-color-reverse" href="/">ショップで確認する</a>
                  </div>
                </div>

              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>


      </div>

      <div class="gift__items-sub-block">


        <?php
        $product_query = new WP_Query(
          array(
            'post_type' => 'products', //投稿タイプを指定
            'order' => 'DESC', //降順
            'offset' => 5 //最新の5記事を除く
          )
        );
        ?>

        <?php if ($product_query->have_posts()) : ?>
          <div class="gift__items">

            <?php
            while ($product_query->have_posts()) :
              $product_query->the_post();
            ?>

              <div class="gift__item">
                <div class="gift__item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('my_thumbnail');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>
                <div class="gift__item-title">
                  <?php the_title(); ?>
                </div>
                <div class="gift__item-price">
                  <?php the_field('price'); ?> yen
                </div>
                <div class="gift__item-link">
                  <a class="btn-color-reverse" href="/">ショップで確認する</a>
                </div>
              </div>

            <?php endwhile; ?>


          </div>

        <?php endif; ?>

      </div>

    </div>


    <div class="gift__rapping wow fadeIn">

      <div class="gift__wrapping-content">
        <div class="gift__wrapping__title">
          ラッピングは無料でお付けいたします。<br class="is-pc">お気軽にご相談ください。
        </div>
        <div class="gift__wrapping-message">
          テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。
        </div>
      </div>

      <div class="gift__wrapping-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/img_wrapping.png" alt="">
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>