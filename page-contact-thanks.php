<?php get_header(); ?>

<div class="top-sub is-contact">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">contact</h2>
    <div class="top-sub__title-sub">お問い合わせ</div>
  </div>
</div>


<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="contact wow fadeIn">

  <div class="inner contact-thanks__inner">

    <?php
    //ブログ本文の表示
    the_content();
    ?>

  </div>
</section>

<?php get_footer(); ?>