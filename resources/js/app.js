
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    methods: {
        checkHappyNumber: function() {
            $('.alert-happy-number').hide();
            $.post('/api/happy-number', {happy_number: this.happy_number}, function (data) {
                app.result_number = data.number;
                if(data.is_happy) $('.alert-happy-number-happy').show();
                else $('.alert-happy-number-sad').show();
            }).fail(function (jqXHR) {
                $('.alert-happy-number-error').show();
            });
        }
    },
    data: {
        is_happy: true,
        happy_number: 1,
        result_number: 1,
        alert_happy_class: 'alert alert-warning alert-happy-number  collapse',
        alert_sad_class: 'alert alert-info alert-happy-number collapse',
        smile_icon_class: 'fa fa-smile-o fa-5x',
        frown_icon_class: 'fa fa-frown-o fa-5x',

    }
});

