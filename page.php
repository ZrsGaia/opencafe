<?php get_header(); ?>


<?php get_template_part('./template-parts/sub-header') ?>

<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section>

  <!-- 現在のページのスラッグを取得 -->
  <?php $slug = get_post_field('post_name', get_the_ID()); ?>

  <div class="inner <?php $slug ?>__inner">

    <?php
    //ブログ本文の表示
    the_content();
    ?>

  </div>

  </div>
</section>


<?php get_footer(); ?>