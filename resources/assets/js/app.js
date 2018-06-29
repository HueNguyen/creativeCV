
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Ckeditor from'./components/common/CKEditor.vue';

window.Vue = require('vue');

Vue.component('ckeditor', Ckeditor);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('skill', require('./components/admin/home/Skill.vue'));
Vue.component('education', require('./components/admin/home/Education.vue'));
Vue.component('profile', require('./components/admin/home/Profile.vue'));
Vue.component('favorite', require('./components/admin/home/Favorite.vue'));
Vue.component('experience', require('./components/admin/home/Experience.vue'));
Vue.component('password', require('./components/admin/home/Password.vue'));
Vue.component('education-manage', require('./components/admin/education/Education.vue'));
Vue.component('education-library', require('./components/admin/education/Library.vue'));
Vue.component('product-manage', require('./components/admin/product/Product.vue'));
Vue.component('blog-manage', require('./components/admin/blog/Blog.vue'));
// Vue.component('ckeditor', require('./components/common/CKEditor.vue'));

const app = new Vue({
    el: '#app'
});
