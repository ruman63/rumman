import commentBox from 'commentbox.io';
export default {
    render(h) {
        return h('div', {class:{commentbox: true}});
    },
    mounted() {
        commentBox('5642061785071616-proj');
    }
}