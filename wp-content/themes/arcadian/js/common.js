"use strict";

/*=require ./includes/blocks/*.js*/
// Menu Hamburger
$('.MenuHamburger').click(function () {
  $(this).toggleClass('MenuHamburger-open');
  $(document.body).toggleClass('overlay');
}); // Adaptive menu

var touch = $('.MenuHamburger');
var menu = $('.MenuHamburger+.MainMenu');
$(touch).on('click', function (e) {
  e.preventDefault();
  menu.slideToggle();
});
$(window).resize(function () {
  var wid = $(window).width();

  if (wid > 991) {
    menu.removeAttr('style');
    touch.removeClass('MenuHamburger-open');
  }

  ;
}); // Scroll to anchor

$('a[href*="#"]').click(function () {
  var elementClick = $(this).attr("href");
  var target = elementClick.substr(elementClick.indexOf("#"));
  var destination = $(target).offset().top - $('.Header').height();
  $('html, body').animate({
    scrollTop: destination
  }, 500);
  return false;
});
$(window).scroll(function () {
  var scrollDistance = $(window).scrollTop() + $('.Header').height() + 200; // Assign active class to nav links while scolling

  $('.PageSection').each(function (i) {
    if ($(this).position().top <= scrollDistance) {
      $('.MainMenu_item-active').removeClass('MainMenu_item-active');
      $('.MainMenu_link[href="#' + $(this).attr('id') + '"]').parent().addClass('MainMenu_item-active');
    }
  });
}).scroll(); // Active menu item

function activeMenuItems() {
  // Get current path and find target items
  var path = window.location.pathname.split("/").pop();
  var $targetItems = $('.MainMenu_link[href="/' + path + '"]').parent(); // Add active class to current items

  $targetItems.each(function (index, el) {
    $(this).addClass('MainMenu_item-active');
  });
}

activeMenuItems(); // Fancybox

$('[data-src="#ContactFormPopup"]').fancybox({
  touch: false,
  baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' + '<div class="fancybox-bg FancyboxBg"></div>' + '<div class="fancybox-inner">' + '<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>' + '<div class="fancybox-toolbar">{{buttons}}</div>' + '<div class="fancybox-navigation">{{arrows}}</div>' + '<div class="fancybox-stage"></div>' + '<div class="fancybox-caption"></div>' + "</div>" + "</div>",
  btnTpl: {
    // This small close button will be appended to your html/inline/ajax content by default,
    // if "smallBtn" option is not set to false
    smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small FancyboxButton FancyboxButton-small" title="{{CLOSE}}">' + "</button>"
  }
});
$("#tel").mask("+7 999 999 99 99");
//# sourceMappingURL=common.js.map
