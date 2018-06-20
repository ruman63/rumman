<template>
  <div id="app">
    <header class="bg-black lg:h-screen"
      style="height:400px">
      <div class="container mx-auto flex flex-col justify-between align-center h-full">
        <h1 class="text-white">Ruman Saleem</h1>
      </div>
    </header>
    <main class="relative">
      <transition
        name="anim"
        enter-active-class="animated fadeInUp"
        leave-active-class="animated fadeIn"
        mode="in-out"
      >
      </transition >
    </main>
  </div>
</template>
<script>

export default {
}
</script>
