<aside id="secondary">

  <!-- 新着記事５件を表示 -->
  <!-- widget_recent -->
  <div class="widget widget_recent wow fadeIn">
    <div class="widget-title">最近の記事</div>
    <div class="wpost-items">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5, //最大５記事表示
        'orderby' => 'date', //日付を条件に
        'order' => 'DESC', //降順で
      );

      $popular_posts = get_posts($args);

      foreach ($popular_posts as $post) : setup_postdata($post);
      ?>

        <!-- wpost-item -->
        <a class="wpost-item" href="<?php the_permalink(); ?>">
          <div class="wpost-item-img">
            <?php
            if (has_post_thumbnail()) {
              // アイキャッチ画像が設定されてれば中サイズで表示
              the_post_thumbnail('medium');
            } else {
              // なければnoimage画像をデフォルトで表示
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            }
            ?>
          </div>
          <div class="wpost-item-body">
            <div class="wpost-item-title">
              <?php
              $title_text = get_the_title();
              //文字数の上限
              $limit = 29;

              //上限文字数以上は3点リーダーに
              if (mb_strlen($title_text) > $limit) {
                $title = mb_substr($title_text, 0, $limit);
                echo $title . '⋯';
              } else {
                echo $title_text;
              }
              ?>
            </div>

            <div class="wpost-item-date">
              <?php the_time('Y.m.d'); ?>
            </div>
          </div><!-- /wpost-item-body -->
        </a><!-- /wpost-item -->

      <?php
      endforeach;
      wp_reset_postdata();
      ?>

    </div><!-- /wpost-items -->
  </div><!-- /widget_recent -->

  <!-- 記事のカテゴリを全て表示 -->
  <div class="widget widget_category wow fadeIn">
    <div class="widget-title">カテゴリ</div>

    <div class="wpost-categorys">

      <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        echo '<li class="wpost-category"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>
    </div>
  </div>

</aside><!-- secondary -->