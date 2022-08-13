
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

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
    }else{
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
      $('.header').removeClass('is-fixed');
      $('.hamburger-nav').fadeOut(hamburger_interval);
    } else {
      hamburger_class.addClass(hamburger_toggleclass);
      $('.header').addClass('is-fixed');
      $('.hamburger-nav').fadeIn(hamburger_interval);
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
    loop:true,
  });

});

