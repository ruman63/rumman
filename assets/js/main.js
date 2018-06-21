import Vue from 'vue';
import App from './App';
import Icon from './components/Icon.vue';

Vue.component('fa-icon', Icon);

new Vue({
    el: "#app",
    components: { App },
    template: '<App/>'
});
