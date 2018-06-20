<template>
  <div class="relative h-screen bg-grey" @mousewheel="scroll">
      <div class="absolute pin-x pin-y h-full bg-green"></div>
      <div class="absolute pin-x pin-y h-full bg-blue"></div>
      <div class="absolute pin-x pin-y h-full bg-yellow"></div>
  </div>
</template>
<script>
export default {
    methods: {
        scroll(e) {
            console.log(e);
        }
    }
}
</script>
