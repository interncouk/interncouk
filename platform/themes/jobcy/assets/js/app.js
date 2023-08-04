/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import TestimonialsComponent from './components/TestimonialsComponent';
import FeaturedNewsComponent from './components/FeaturedNewsComponent';
import FeaturedCompaniesComponent from './components/FeaturedCompaniesComponent';

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('testimonials-component', TestimonialsComponent);
Vue.component('featured-news-component', FeaturedNewsComponent);
Vue.component('featured-companies-component', FeaturedCompaniesComponent);

/**
 * This let us access the `__` method for localization in VueJS templates
 * ({{ __('key') }})
 */
Vue.prototype.__ = key => {
    window.trans = window.trans || {};

    return window.trans[key] !== 'undefined' && window.trans[key] ? window.trans[key] : key;
};

Vue.directive('swiper', {
    inserted: function (el) {

        new Swiper('#' + $(el).prop('id'), {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            breakpoints: {
                200: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    },
});

new Vue({
    el: '#app',
});
