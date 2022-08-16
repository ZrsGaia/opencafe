<?php get_header(); ?>

<div class="top-sub is-menu">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">MENU</h2>
    <div class="top-sub__title-sub">メニュー</div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>

<section class="menu-sub">

  <div class="inner menu-sub__inner">

    <!-- タブメニュー -->
    <div class="tab__menus wow fadeIn">
      <?php
      //表示するページのスラッグを取得
      $genre_display_slug;


      $genre_terms = get_terms(
        'genre',
        array(
          'orderby' => 'description',
          'hide_empty' => false,
          'parent' => '0', //子ジャンルを含めない
        )
      );
      foreach ($genre_terms as $genre_term) :
      ?>
        <a class="tab__menu <?php if (get_queried_object()->name === $genre_term->name) {
                              echo 'is-active';
                            } ?>" id="#<?php echo esc_html($genre_term->slug); ?>" href="<?php echo esc_url(get_term_link($genre_term, 'genre')); ?>"><span>

            <!-- 現在表示しているページのスラッグを代入 -->
            <?php if (get_queried_object()->slug === $genre_term->slug) {
              $genre_display_slug = $genre_term->slug;
            } ?>

            <!-- //パンとスイーツの文字列は改行を追加 -->
            <?php
            if ($genre_term->slug === 'breadsweets') {
              $genre_term->name = "パン&amp;<br>スイーツ";
            }
            echo $genre_term->name;
            ?>
          </span></a>
      <?php
      endforeach;
      ?>
    </div>


    <?php
    $genre_query = new WP_Query(
      array(
        'post_type' => 'menu', //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する最大記事数(全件取得)
        'orderby' => 'description',
        'order' => 'ASC', //昇順

        'tax_query' => array(
          array(
            'taxonomy' => 'genre', //タクソノミーを指定
            'terms'    => $genre_display_slug, //表示するページのスラッグ
            'field'    => 'slug',
          ),
        ),
      )
    );
    ?>

    <?php
    if ($genre_query->have_posts()) :
    ?>
      <!-- タブのコンテンツ部分 -->
      <div class="tab__items wow fadeIn">
        <div class="tab__item">
          <div class="menu-sub__items">

            <?php
            while ($genre_query->have_posts()) :
              $genre_query->the_post();
            ?>


              <div class="menu-sub__item">

                <div class="menu-sub__item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('my_thumbnail');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>


                <div class="menu-sub__item-title">
                  <?php the_title(); ?>
                </div>


                <div class="menu-sub__item-price">
                  <?php the_field('price'); ?> yen
                </div>

              </div>

            <?php endwhile; ?>

          </div>
        </div>


      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>