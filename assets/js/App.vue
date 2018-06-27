<template>
  <div id="app">
    <header class="w-full nav-fixed-transparent" v-fix-top="'nav-fixed'">
      <div class="container mx-auto">
        <nav class="flex justify-between px-8">
          <div class="brand">
            <h1 class="text-orange hover:text-white">
              <a href="#">RS</a>
            </h1>
          </div>
          <div class="flex-1 flex md:hidden justify-end items-center">
            <button class="py-2 px-3 rounded leading-none">
              <fa-icon name="ellipsis-v" class="text-orange fill-current h-4"></fa-icon>
            </button>
          </div>
          <ul class="nav-menu-links">
            <div class="md:hidden absolute pin-t pin-r mr-6 mt-6">
              <button class="text-orange"><fa-icon name="times" class="w-6 h-6 fill-current"></fa-icon></button>
            </div>
            <li class="nav-link"><a href="#">About</a></li>
            <li class="nav-link"><a href="#">My Work</a></li>
            <li class="nav-link"><a href="#">Contact</a></li>
            <!-- <li class="ml-4">
              <button class="text-md py-2 px-4 rounded bg-orange hover:bg-orange-dark text-white font-semibold">Hire Me!</button>
            </li> -->
          </ul>
        </nav>
      </div>
    </header>
    <section class="bg-cover" style="background-image: url('/images/banner.jpg');">
      <div class="bg-black-alpha-95 py-navSize flex flex-col items-center min-h-screen text-white">
        <div class="flex-1 flex flex-col justify-center w-full">
          <div class="container mx-auto">
            <div class="inline-block p-3 mg:p-8 w-auto lg:max-w-1/2">
              <h1 class="text-4xl mb-2 font-semibold leading-normal">Rumman <span class="font-bold text-orange">Saleem</span></h1>
              <h3 class="text-2xl font-semibold mb-2 leading-none">Web Developer</h3>  
              <div class="mb-6 flex -mx-1">
                <a href="https://twitter.com/zruman" class="text-blue-light">
                  <fa-icon name="twitter" class="w-4 h-4 fill-current mx-1"></fa-icon>
                </a>
                <a href="https://github.com/ruman63" class="text-grey-light">
                  <fa-icon name="github" class="w-4 h-4 fill-current mx-1"></fa-icon>
                </a>
                <a href="https://stackoverflow.com/users/6550225/ruman" class="text-orange">
                  <fa-icon name="stack-overflow" class="w-4 h-4 fill-current mx-1"></fa-icon>
                </a>
              </div>
              <p class="mb-6 leading-normal text-xl">I work as a Freelancer. I have worked on a variety of Websites, from simple static websites to highly reactive administrator's Dashboard. I am always looking for web projects, to work for cool people out there. <br> Just like you ;)</p>
              <div class="flex items-center">
                <v-tooltip position="top">
                  <span title="HTML 5"><fa-icon name="html5" class="fill-current text-white hover:text-orange mx-2 h-6"></fa-icon></span>
                  <div slot="content" class="relative p-4 w-64 bg-black text-white rounded shadow">
                    <h5 class="mb-2">HTML5</h5>
                    <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard.</p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="PHP"><fa-icon name="php" class="fill-current text-white hover:text-indigo mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">PHP</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="Laravel"><fa-icon name="laravel" class="fill-current text-white hover:text-red mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">Laravel</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="CSS 3"><fa-icon name="css3" class="fill-current text-white hover:text-blue mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">CSS3</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="SASS"><fa-icon name="sass" class="fill-current text-white hover:text-pink mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">SASS</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="JavaScript"><fa-icon name="js-square" class="fill-current text-white hover:text-yellow mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">JavaScript</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <span title="Vuejs"><fa-icon name="vuejs" class="fill-current text-white hover:text-teal-dark mx-2 h-6"></fa-icon></span>
                  <div class="p-4 w-64 bg-black text-white rounded shadow" slot="content">
                    <h5 class="mb-2">VueJs</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit eaque similique optio cupiditate labore accusantium excepturi blanditiis, totam cumque accusamus odit, porro quam inventore illum nobis rem provident itaque?
                    </p>
                  </div>
                </v-tooltip>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="h-screen"></section>
    <section class="h-screen"></section>
    <section class="h-screen"></section>
  </div>
</template>
<script>
export default {

}
</script>
