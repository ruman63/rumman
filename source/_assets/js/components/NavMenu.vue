<template>
    <div class="flex-1 flex justify-end items-center">
        <button class="py-2 px-3 rounded leading-none sm:hidden" @click.prevent="show">
            <fa-icon name="ellipsis-v" class="text-orange fill-current h-4"></fa-icon>
        </button>
        <transition :name="isMobile ? 'slide' : ''">
            <div v-if="isVisible" class="nav-menu-links sm:static w-48 sm:w-auto" v-click-outside="hide">
                <div class="px-4 py-2 flex items-center mb-6 sm:hidden">
                    <h4 class="flex-1">RS</h4>
                    <button class="p-2 text-orange" @click.prevent="hide">
                        <fa-icon name="arrow-right" class="w-4 h-4 fill-current"></fa-icon>
                    </button>
                </div>
                <ul class="list-reset flex flex-col sm:flex-row items-start justify-center">
                    <slot></slot>
                </ul>
            </div>
        </transition>
    </div>
</template>
<script>
export default {
    props: {
        breakpoint: {default: 576},
    },
    data() {
        return {
            showing: false,
            currentWidth: 1024,
        }
    },
    computed: {
        isMobile() {
            return this.currentWidth <= this.breakpoint;
        },
        isVisible() {
            return !this.isMobile || this.showing;
        }
    },
    methods: {
        show() {
            return this.showing = true;
        },
        hide() {
            return this.showing = false;
        },
    },
    mounted() {
        this.currentWidth = window.innerWidth;
        window.addEventListener('resize', e => this.currentWidth = window.innerWidth);
    }
}
</script>
<style scoped>
    .slide-enter-active, .slide-leave-active {
        transition: all 0.5s ;
    }
    .slide-enter, .slide-leave-to {
        transform: translateX(100%);
    }
</style>
