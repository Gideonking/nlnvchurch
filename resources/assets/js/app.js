/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//   el: '#app'
// });

$(function() {
  if ($('.welcome-join-time').length > 0) {
    var today = new Date(),
        sunday = new Date();

    sunday.setDate(today.getDate() - today.getDay());
    sunday.setHours(10);
    sunday.setMinutes(0);
    sunday.setSeconds(0);
    sunday.setMilliseconds(0);

    if (sunday < today) sunday.setDate(sunday.getDate() + 7);

    var countDownDate = new Date(sunday).getTime();

    var x = setInterval(function() {
      var now = new Date().getTime(),
          distance = countDownDate - now,
          days = addZero(Math.floor(distance / (1000 * 60 * 60 * 24))),
          hours = addZero(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))),
          minutes = addZero(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))),
          seconds = addZero(Math.floor((distance % (1000 * 60)) / 1000));

      $('.welcome-join-time').text(days + ":" + hours + ":" + minutes + ":" + seconds);
    }, 1000);
  }

  if ($('#flash-message').length > 0) {
    setTimeout(function() {
      $('#flash-message').fadeOut(500);
    }, 2000);
  }

  if ($('.slider').length > 0) {
    $('.slider').slick({
      fade: true,
      nextArrow: '<a class="events-arrow events-arrow--next" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>',
      prevArrow: '<a class="events-arrow events-arrow--prev" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>'
    });
  }
});

function addZero(n) {
  return n < 10 ? '0' + n : '' + n;
}
