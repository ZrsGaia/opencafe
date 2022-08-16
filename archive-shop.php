<?php get_header(); ?>

<div class="top-sub is-shop">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main">SHOP</h2>
    <div class="top-sub__title-sub">店舗一覧</div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('./template-parts/breadcrumb') ?>


<section class="shop">

  <div class="inner shop__inner">




    <?php if (have_posts()) : ?>
      <div class="shop__items">

        <?php
        while (have_posts()) :
          the_post();
        ?>

          <div class="shop__item wow fadeIn">

            <div class="shop__title"><?php the_title(); ?></div>

            <div class="shop__content">

              <div class="access__map">
                <div class="iframe-wrap">
                  <?php the_field('map'); ?>
                </div>
              </div>

              <div class="access__info">
                <div class="access__info-block">
                  <dl>
                    <dt>住所</dt>
                    <dd><?php the_field('address'); ?></dd>
                  </dl>
                  <dl>
                    <dt>TEL</dt>
                    <dd><?php the_field('tel'); ?></dd>
                  </dl>
                  <dl>
                    <dt>Mail</dt>
                    <dd><?php the_field('email'); ?></dd>
                  </dl>
                </div>
                <div class="access__info-block">
                  <dl>
                    <dt>営業時間</dt>
                    <dd><?php the_field('time'); ?></dd>
                  </dl>
                  <dl>
                    <dt>定休日</dt>
                    <dd><?php the_field('holiday'); ?></dd>
                  </dl>
                  <dl>
                    <dt>座席</dt>
                    <dd><?php the_field('count'); ?></dd>
                  </dl>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

          </div>

        <?php endif; ?>

      </div>

      <!-- pagenation -->
      <?php get_template_part('./template-parts/pagination') ?>

  </div>
</section>

<?php get_footer(); ?>