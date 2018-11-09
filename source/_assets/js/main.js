import Vue from 'vue';
import Icon from './components/Icon.vue';
import Tooltip from './components/Tooltip.vue';
import NavMenu from './components/NavMenu.vue';
import Highlight from './components/Highlight';
import throttle from 'lodash.throttle';

Vue.directive('click-outside', {
    bind (el, binding) {
        el.addEventListener('click', e => e.stopPropagation());
        document.body.addEventListener('click', binding.value);
    },   
    unbind(el, binding) {
        el.removeEventListener('click', e => e.stopPropagation());
        document.body.removeEventListener('click', binding.value);
    }
});
Vue.directive('fix-top', {
    bind(el, binding) {
        let scrollCallback = throttle(function(e) {
            if (window.scrollY <= el.offsetTop){
                el.classList.remove(binding.value);
            } else {
                el.classList.add(binding.value);
            }
        }, 200);
        window.addEventListener('scroll', scrollCallback);
    }
})

Vue.component('fa-icon', Icon);
Vue.component('v-tooltip', Tooltip);
Vue.component('nav-menu', NavMenu);
Vue.component('syntax-highlight', Highlight);

new Vue({
    el: "#app",
});

