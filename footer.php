<section class="section access wow fadeIn" id="access">
  <div class="inner access__inner">
    <h3 class="section__head-main access__head">
      ACCESS
      <span class="section__head-sub">アクセス</span>
    </h3>

    <div class="access__content">
      <div class="access__map">
        <div class="iframe-wrap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101407.71937219679!2d-122.15130741364351!3d37.41368217481618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2z44Kw44O844Kw44Or44OX44Os44OD44Kv44K5!5e0!3m2!1sja!2sjp!4v1656298165632!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="access__info">
        <div class="access__info-block">
          <dl>
            <dt>住所</dt>
            <dd>〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目</dd>
          </dl>
          <dl>
            <dt>TEL</dt>
            <dd>0123-456-789</dd>
          </dl>
          <dl>
            <dt>Mail</dt>
            <dd>example@mail.com</dd>
          </dl>
        </div>
        <div class="access__info-block">
          <dl>
            <dt>営業時間</dt>
            <dd>7:00〜21:00<br>※ラストオーダー 20:30</dd>
          </dl>
          <dl>
            <dt>定休日</dt>
            <dd>水曜日</dd>
          </dl>
          <dl>
            <dt>座席</dt>
            <dd>テーブル20席 ／ カウンター席6席</dd>
          </dl>
        </div>
      </div>
    </div>

  </div>
</section>



</main>


<footer class="footer">

  <div class="inner footer__inner">

    <?php
    //　ソーシャルメニューを動的に表示する
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'social', //ソーシャルメニューをここに表示すると指定
        'container' => 'nav',
        'container_class' => 'footer-nav-sns',
        'menu_class' => 'footer-nav-sns__list',
      )
    );
    ?>

    <div class="footer__copy-right"><small>&copy;2000-2021 open cafe. All Rights Reserved.</small></div>
  </div>


</footer>


<div class="to-top">
  <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/icon_arrow-top.svg" alt="page-top"></a>
</div>



</div>


<?php wp_footer(); ?>

</body>


</html>