<template>
  <div id="app">
    <section class="bg-cover h-400px md:min-h-screen" style="background-image: url('/images/banner.jpg');">
      <div class="bg-black-alpha-90 flex flex-col items-center h-full text-white">
        <header class="bg-black-alpha-50 py-3 w-full">
          <div class="container mx-auto">
            <nav class="flex items-center">
              <ul class="list-reset flex flex-1 font-semibold text-orange">
                <li><a class="nav-link" href="#">Home</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">My Work</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
              </ul>
              <ul class="list-reset">
                <button class="text-md py-2 px-4 rounded border-2 border-orange text-orange hover:border-white hover:text-white font-semibold">Hire Me!</button>
              </ul>
            </nav>
          </div>
        </header>
        <div class="flex-1 flex flex-col justify-center w-full">
          <div class="container mx-auto">
            <div class="inline-block p-8 w-auto lg:max-w-1/2">
              <h1 class="text-4xl uppercase mb-2 tracking-wide leading-none">Rumman Saleem</h1>
                <h3 class="text-2xl font-semibold mb-2 leading-none">Web Developer</h3>  
                <div class="mb-6">
                    <fa-icon name="twitter" class="h-4 fill-current text-blue-light mr-1"></fa-icon>
                    <fa-icon name="github" class="h-4 fill-current text-yellow-light mr-1"></fa-icon>
                    <fa-icon name="stack-overflow" class="h-4 fill-current text-orange mr-1"></fa-icon>
                </div>
              <p class="mb-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ullam sed atque perspiciatis id praesentium! Minima inventore reprehenderit ea expedita iure quae nesciunt dignissimos at ratione? Ea omnis ut expedita.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolores optio modi ea ducimus minus rem mollitia, sunt aspernatur beatae asperiores consectetur aliquid vitae natus incidunt ipsam magni ullam non.</p>
            </div>
          </div>
        </div>
        <footer class="bg-black-alpha-50 text-orange py-2 w-full">
          <div class="container mx-auto">
            <div class="flex justify-center items-center">
              <!-- <span class="font-bold text-xs tracking-wide uppercase mr-4">Technologies I Use</span> -->
              <span title="HTML 5"><fa-icon name="html5" class="fill-current text-white hover:text-orange mx-2 h-6"></fa-icon></span>
              <span title="PHP"><fa-icon name="php" class="fill-current text-white hover:text-indigo mx-2 h-6"></fa-icon></span>
              <span title="Laravel"><fa-icon name="laravel" class="fill-current text-white hover:text-red mx-2 h-6"></fa-icon></span>
              <span title="CSS 3"><fa-icon name="css3" class="fill-current text-white hover:text-blue mx-2 h-6"></fa-icon></span>
              <span title="SASS"><fa-icon name="sass" class="fill-current text-white hover:text-pink mx-2 h-6"></fa-icon></span>
              <span title="JavaScript"><fa-icon name="js-square" class="fill-current text-white hover:text-yellow mx-2 h-6"></fa-icon></span>
              <span title="Vuejs"><fa-icon name="vuejs" class="fill-current text-white hover:text-teal-dark mx-2 h-6"></fa-icon></span>
            </div>
          </div>
        </footer>
      </div>
    </section>
  </div>
</template>
<script>

export default {
}
</script>
