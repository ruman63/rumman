<template>
    <span @click="show" class="relative cursor-pointer">
        <slot></slot>
        <transition name="fade">
            <div v-if="showing" v-click-outside="hide" class="absolute" 
            :style="tipStyle">
                <slot name="content">
                    <div :style="defaultSlotStyle">
                        <p>Use slot with name 'cotnent' to override this tip content</p>
                    </div>
                </slot>
            </div>
        </transition>
    </span>
</template>
<script>
export default {
    props: {
        position: {default: 'bottom'},
        invertAlign: { default: false },
    },
    data() {
        return {
            showing: false,
            locations: {
                top: 'bottom',
                bottom: 'top',
                left: 'right',
                right: 'left',
            },
            defaultSlotStyle: {
                padding: '10px',
                width: '240px',

                backgroundColor: 'white', 
                boxShadow: '0px 0px 20px 12px rgba(128,128,128,0.76)', 
                color: 'black'
            }
        }
    },
    computed: {
        location() {
            return this.locations[this.position];
        },
        tipStyle() {
            let style = {zIndex:1};
            if(this.position == 'top' || this.position == 'bottom') {
                style[this.location] = 'calc(100% + 10px)';
                style[this.invertAlign ? 'right' : 'left'] = 0;
            } else {
                style[this.location] = 'calc(100% + 5px)';
                style[this.invertAlign ? 'bottom' : 'top'] = 0;
            }
            return style;
        }
    },
    methods: {
        show() {
            this.showing = true;
        },
        hide() {
            this.showing = false;
        }
    }
}
</script>
<style scoped>
    .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to {
    opacity: 0;
    }
</style>

