import Highlighter from 'highlight.js';
import 'highlight.js/styles/railscasts.css';

export default {
    props: {
        tag: {default: 'div'}
    },
    mounted () {
        this.highlight(this.$el.querySelectorAll('pre'));
    },
    render(h){
        return h('div', this.$slots.default);
    },

    methods: {
        highlight(block) {
            if (! block) return;

            block.forEach(
                node => Highlighter.highlightBlock(node)
            );
        },
    },
}
