"use strict";

// MixitUp
var containerEl = document.querySelector('.PortfolioPage_projectList');
var mixer = mixitup(containerEl); // Fancybox

$('[data-fancybox^="gallery"]').fancybox({
  infobar: false,
  loop: true,
  buttons: ["close"],
  btnTpl: {
    close: '<button data-fancybox-close class="fancybox-button fancybox-button--close FancyboxButton FancyboxButton-close" title="{{CLOSE}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 15"><path d="M11.779 11.096l.012-.012L6.707 6 11.853.854a.499.499 0 1 0-.707-.707L6 5.293.854.147a.499.499 0 1 0-.707.706L5.293 6 .147 11.146a.499.499 0 1 0 .707.707L6 6.707l5.084 5.084.012-.012c.09.13.234.221.404.221a.5.5 0 0 0 .5-.5.49.49 0 0 0-.221-.404" fill="#000" fill-rule="evenodd"/></svg>' + "</button>",
    // Arrows
    arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left FancyboxButton FancyboxButton-arrowLeft" title="{{PREV}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><switch><g><path d="M1.44 47.945l16.233-21.664c1.9-2.537 6.227-.059 4.299 2.514L7.948 47.511H97.13c3.211 0 3.211 4.979 0 4.979H7.948l14.024 18.717c1.928 2.572-2.398 5.05-4.299 2.514C12.262 66.499 6.852 59.278 1.44 52.057c-1.306-.943-1.306-3.17 0-4.112z"/></g></switch></svg>' + "</button>",
    arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right FancyboxButton FancyboxButton-arrowRight" title="{{NEXT}}">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><switch><g><path d="M1.44 47.945l16.233-21.664c1.9-2.537 6.227-.059 4.299 2.514L7.948 47.511H97.13c3.211 0 3.211 4.979 0 4.979H7.948l14.024 18.717c1.928 2.572-2.398 5.05-4.299 2.514C12.262 66.499 6.852 59.278 1.44 52.057c-1.306-.943-1.306-3.17 0-4.112z"/></g></switch></svg>' + "</button>"
  }
});
//# sourceMappingURL=portfolio.js.map
