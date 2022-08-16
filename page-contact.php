<?php get_header(); ?>

<?php get_template_part('./template-parts/sub-header') ?>


<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="contact wow fadeIn">

  <div class="inner contact__inner">

    <?php
    //ブログ本文の表示
    the_content();
    ?>

  </div>
</section>

<?php get_footer(); ?>