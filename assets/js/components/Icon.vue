<template>
    <svg xmlns="http://www.w3.org/2000/svg" :viewBox="viewBox">
        <path :d="path"></path>
    </svg>
</template>
<script>
import Icons from '../icons.json';
export default {
    props: {
        name: {required: true},
        type: {}
    },
    data() {
        return {
            icon: null,
        }
    },
    computed: {
        svg() {
            return this.icon.svg[this.type ? this.type : this.icon.styles[0]];
        },
        viewBox() {
            if(!this.icon || !this.svg) {
                return "0 0 512 512";
            }
            return this.svg.viewBox.join(' ');
        },
        path() {
            if(!this.icon || !this.svg) {
                return "M0 0 512 512";
            }
            return this.svg.path;
        }
    },
    created() {
        this.icon = Icons[this.name];
    }
}
</script>
