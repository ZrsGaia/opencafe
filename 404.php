<?php get_header(); ?>


<div class="top-sub is-concept wow fadeIn">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">404 Not Found</h2>
    <div class="top-sub__title-sub">ページが見つかりません</div>
  </div>
</div>

<section class="not-found">

  <div class="inner not-found__inner">

    <h3 class="not-found__head"><span>404</span>Not Found</h3>

    <div class="not-found__lead">ページが見つかりませんでした。</div>

    <p class="not-found__content">申し訳ありませんが、ページが存在しないかアクセスできません。<br>入力されたURLをご確認ください。</p>

    <div class="not-found__btn">
      <a class="btn-border" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>