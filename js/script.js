//wow.js
new WOW().init();

// ドロワーメニュー
jQuery(".drawer-icon").on("click", function (e) {
  // デフォルトイベント無効化
  e.preventDefault();

  jQuery(".drawer-icon").toggleClass("is-active");
  jQuery(".drawer-icon-background").toggleClass("is-active");
  jQuery(".drawer-content").toggleClass("is-active");
  jQuery(".drawer-background").toggleClass("is-active");

  return false;
});

// ページ内リンクスムーススクロール
// #から始まるURL(ID)がクリックされた時
jQuery('a[href^="#"]').on("click", function () {
  // ヘッダーの高さを取得
  let header = jQuery(".header").innerHeight();

  // スクロールの速度を決定
  let speed = 300;

  // 対象のIDを取得
  let id = jQuery(this).attr("href");

  // ポジションはページトップボタンの0を初期値とする
  let position = 0;

  // リンクのIDがページトップボタンではなかった時
  if (id != "#") {
    // トップからの距離からヘッダー分の高さを引いて、ポジションを確定
    // ヘッダーとコンテンツが被るのを防ぐ
    position = jQuery(id).offset().top - header;

    //ドロワーメニューを閉じる
    jQuery(".drawer-icon").toggleClass("is-active");
    jQuery(".drawer-icon-background").toggleClass("is-active");
    jQuery(".drawer-content").toggleClass("is-active");
    jQuery(".drawer-background").toggleClass("is-active");
  }

  // 確定したポジションにスクロールで移動
  jQuery("html, body").animate(
    {
      scrollTop: position,
    },
    speed
  );

  return false;
});

// 背景をタップしてもドロワーメニューを閉じれるようにする
jQuery(".drawer-background").on("click", function (e) {
  // デフォルトイベント無効化
  e.preventDefault();

  jQuery(".drawer-icon").toggleClass("is-active");
  jQuery(".drawer-icon-background").toggleClass("is-active");
  jQuery(".drawer-content").toggleClass("is-active");
  jQuery(".drawer-background").toggleClass("is-active");

  return false;
});

// swiper
const swiper = new Swiper(".swiper-container", {
  slidesPerView: "auto",
  loop: true,

  effect: "fade",

  //自動再生
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 4000,

  //ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//ページトップボタン
jQuery(window).on("scroll", function ($) {
  //ページトップから100pxスクロールしたらページボタンを出現するようにする
  if (jQuery(this).scrollTop() > 100) {
    jQuery(".to-top").addClass("is-show");
  } else {
    jQuery(".to-top").removeClass("is-show");
  }
});

jQuery(".to-top").click(function (e) {
  // デフォルトイベント無効化
  e.preventDefault();

  // スクロールの速度を決定
  let speed = 300;

  //ページトップボタンをクリックするとでページトップへ
  jQuery("body,html").animate(
    {
      scrollTop: 0,
    },
    speed
  );

  return false;
});

//タブメニュー
$(function () {
  //タブをクリックしたら発動
  $(".tab__menu").on("click", function () {
    //選択されていた.tab_itemからactiveクラスを取り除く
    $(".tab__item").removeClass("is-active");
    //クリックされた.tab_itemにactiveクラスを付与
    $($(this).attr("id")).addClass("is-active");
    //選択されていた.tab_menuからactiveクラスを取り除く
    $(".tab__menu").removeClass("is-active");
    //クリックされた.tab_menuにactiveクラスを付与
    $(this).addClass("is-active");
  });
});
