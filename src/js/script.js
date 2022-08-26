


jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  //スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });
  window.onload = function () {
    var params = (new URL(document.location)).searchParams;
    if (document.URL.match(/content/)) {
      var param = params.get('ver')
      // alert(params.get('ver'));
      let header = $('header').innerHeight();
      let time = 400;
      let targetY = $('#' + param).offset().top - header - 20;
      $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    }
  }

  /* pagetop トップへスクロール */
  var topBtn = $('.js-pagetop');
  topBtn.hide();

  var mainview_height = $(".main-view").height();
  var page_mainview_height = $(".page-main-view").height();
  var header_height = $(".header").height();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }

    if ($(this).scrollTop() > (mainview_height - header_height) || $(this).scrollTop() > (page_mainview_height - header_height)) {
      $(".header").addClass('header__scroll');
    } else {
      $(".header").removeClass('header__scroll');
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });


  /* hunburger menu */
  var hamburger_class = $('.js-hamburger');  //triger class
  var hamburger_toggleclass = 'is-open';  //toggle class
  var hamburger_interval = 400;

  hamburger_class.click(function () {
    if (hamburger_class.hasClass(hamburger_toggleclass)) {
      hamburger_class.removeClass(hamburger_toggleclass);
      $('.p-header').removeClass('is-fixed');
      $('.p-hamburger-nav').fadeOut(hamburger_interval);
    } else {
      hamburger_class.addClass(hamburger_toggleclass);
      $('.p-header').addClass('is-fixed');
      $('.p-hamburger-nav').fadeIn(hamburger_interval);
    }
  });

  /* mainview swiper */
  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  }
  new Swiper('.swiper-container', swipeOption);

  /* top works swiper */
  var swiper = new Swiper(".js-works-swiper", {
    pagination: {
      el: ".js-workds-swiper-pagination",
    },
    autoplay: {
      delay: 5000,
    },
    loop: true,
  });

  // var swiper = new Swiper(".js-works-single-thumb-swiper", {
  //   loop: true,
  //   spaceBetween: 10,
  //   slidesPerView: 1,
  //   centeredSlides: true,
  //   freeMode: true,
  //   watchSlidesProgress: true,
  // });
  // var swiper2 = new Swiper(".js-works-single-swiper", {
  //   loop: true,
  //   spaceBetween: 10,
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   thumbs: {
  //     swiper: swiper,
  //   },
  // });

  //メイン
  var wokrs_intro_cnt = $(".p-works-intro__image").length;
  var slider = new Swiper('.js-works-single-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: wokrs_intro_cnt, //スライドの枚数と同じ値を指定
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  //サムネイル
  var thumbs = new Swiper('.js-works-single-thumb-swiper', {
    slidesPerView: 'auto',
    // spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
  });

  //4系～
  //メインとサムネイルを紐づける
  slider.controller.control = thumbs;
  thumbs.controller.control = slider;

});

