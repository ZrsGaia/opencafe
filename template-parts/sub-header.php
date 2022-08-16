<!-- 現在のページのスラッグを取得 -->
<?php $slug = get_post_field('post_name', get_the_ID()); ?>

<div class="top-sub is-<?php $slug ?>">

  <div class="top-sub__inner">
    <h2 class="top-sub__title-main"><?php echo $slug ?></h2>
    <div class="top-sub__title-sub"><?php the_title() ?></div>
  </div>
</div>