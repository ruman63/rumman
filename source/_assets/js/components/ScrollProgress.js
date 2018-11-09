import debounce from 'lodash.debounce';
export default {
    props: {
        dataContainer: {required: true} 
    },
    data() {
        return {
            progress: 0,
            container: null,
        }
    },
    render(h) {
        return this.$scopedSlots.default({
            progress: this.progress
        });
    },
    methods: {
        onScroll: debounce(function({pageY}){
            console.log(pageY);
            let relativeScrollPosition = pageY - this.container.offsetTop + (window.innerHeight/2);
            let relativeScrollEnd = this.container.clientHeight;
            this.progress = relativeScrollPosition < 0 ? 0 : 
                (relativeScrollPosition * 100
                /relativeScrollEnd);
        }, 200)
    },
    mounted() {
        this.container = document.querySelector(this.dataContainer);
        console.log(window)
        window.addEventListener('scroll', this.onScroll);
    }
}