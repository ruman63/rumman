@extends('_layouts.master')
@section('head')
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">     
@endsection
@section('body')
<div id="app">
    <header class="w-full fixed pin-t pin-x z-50">
      <div class="nav-wrapper" v-fix-top="'nav-fixed'">
        <div class="container mx-auto">
          <nav class="flex justify-between px-3 md:px-8">
            <div class="brand">
              <h1 class="text-orange hover:text-white font-display">
                <a href="#">RS</a>
              </h1>
            </div>
            <nav-menu></nav-menu>
          </nav>
        </div>
      </div>
    </header>
    <section class="bg-cover bg-fixed bg-center" style="background-image: url('{{ $page->baseUrl }}/assets/images/bg.jpg');">
      <div class="bg-black-alpha-95 py-navSize flex flex-col items-center min-h-screen text-white">
        <div class="flex-1 flex flex-col justify-center w-full">
          <div class="container mx-auto">
            <div class="flex flex-col items-center p-3 md:p-8">
              <h1 class="text-4xl mb-4 lg:mb-8 text-center font-display font-normal text-white leading-none uppercase tracking-wider md:tracking-widest lg:tracking-superwide">Rumman Saleem</h1>
              <h3 class="text-2xl text-center font-display tracking-wide mb-4 leading-none">Web Developer</h3>  
              <div class="flex items-center h-6">
                <a href="https://twitter.com/zruman" class="text-blue-light h-4 hover:h-6">
                  <fa-icon name="twitter" class="h-full fill-current mx-1"></fa-icon>
                </a>
                <a href="https://github.com/ruman63" class="text-grey-light h-4 hover:h-6">
                  <fa-icon name="github" class="h-full fill-current mx-1"></fa-icon>
                </a>
                <a href="https://stackoverflow.com/users/6550225/ruman" class="text-orange h-4 hover:h-6">
                  <fa-icon name="stack-overflow" class="h-full fill-current mx-1"></fa-icon>
                </a>
              </div>
              <!-- <p class="mb-6 leading-normal text-xl">I work as a Freelancer. I have worked on a variety of Websites, from simple static websites to highly reactive administrator's Dashboard. I am always looking for web projects, to work for cool people out there. <br> Just like you ;)</p> -->
              <div class="absolute pin-b pin-x flex items-center justify-center py-2">
                <v-tooltip position="top">
                  <button title="HTML 5" class="text-white hover:text-orange focus:text-orange mx-2">
                    <fa-icon name="html5" class="fill-current h-6"></fa-icon>
                  </button>
                  <div slot="content" class="relative p-4 w-64 bg-orange text-white rounded shadow">
                    <h5 class="mb-2">HTML5</h5>
                    <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard.</p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="PHP" class="text-white hover:text-indigo focus:text-indigo mx-2">
                    <fa-icon name="php" class="fill-current h-6"></fa-icon>
                  </button>
                  <div class="p-4 w-64 bg-indigo text-white rounded shadow" slot="content">
                    <h5 class="mb-2">PHP</h5>
                    <p>
                      PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="Laravel" class="text-white hover:text-red focus:text-red mx-2">
                    <fa-icon name="laravel" class="fill-current h-6"></fa-icon>
                  </button>
                  <div class="p-4 w-64 bg-red text-white rounded shadow" slot="content">
                    <h5 class="mb-2">Laravel</h5>
                    <p>
                      Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="CSS 3" class="text-white hover:text-blue focus:text-blue mx-2"><fa-icon name="css3" class="fill-current h-6"></fa-icon></button>
                  <div class="p-4 w-64 bg-blue text-white rounded shadow" slot="content">
                    <h5 class="mb-2">CSS3</h5>
                    <p>
                      CSS: Cascading Style Sheets, is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="SASS" class="text-white hover:text-pink focus:text-pink mx-2">
                    <fa-icon name="sass" class="fill-current h-6"></fa-icon>
                  </button>
                  <div class="p-4 w-64 bg-pink text-white rounded shadow" slot="content">
                    <h5 class="mb-2">SASS</h5>
                    <p>
                      Sass (Syntactically awesome style sheets) is a style sheet language initially designed by Hampton Catlin and developed by Natalie Weizenbaum.
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="JavaScript" class="text-white hover:text-yellow focus:text-yellow mx-2">
                    <fa-icon name="js-square" class="fill-current h-6"></fa-icon>
                    </button>
                  <div class="p-4 w-64 bg-yellow text-black rounded shadow" slot="content">
                    <h5 class="mb-2">JavaScript</h5>
                    <p>
                      JavaScript, often abbreviated as JS, is a high-level, interpreted programming language. It is a language which is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm.
                    </p>
                  </div>
                </v-tooltip>
                <v-tooltip position="top">
                  <button title="Vuejs" class="text-white hover:text-teal-dark focus:text-teal-dark mx-2">
                    <fa-icon name="vuejs" class="fill-current h-6"></fa-icon>
                  </button>
                  <div class="p-4 w-64 bg-teal-dark text-blue-darker rounded shadow" slot="content">
                    <h5 class="mb-2">VueJs</h5>
                    <p>
                      Vue.js is an open-source JavaScript framework for building user interfaces. Integration into projects that use other JavaScript libraries is simplified with Vue because it is designed to be incrementally adoptable.
                    </p>
                  </div>
                </v-tooltip>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="coming" class="h-screen flex items-center justify-center">
      <h1 class="text-2xl md:text-5xl">Coming Soon !</h1>
    </section>
    <footer class="bg-black py-4">
      <div class="container mx-auto">
        <div class="flex flex-wrap justify-center text-orange -mb-3">
          <div class="flex items-center px-4 mb-3">
            <fa-icon name="envelope" class="w-4 fill-current mr-2"></fa-icon>
            <a href="mailto:ruman63@gmail.com" class="hover:text-white">ruman63@gmail.com</a>
          </div>
          <div class="flex items-center px-4 mb-3">
            <fa-icon name="phone" class="w-4 fill-current mr-2"></fa-icon>
            <a href="tel:+918439359306" class="hover:text-white">+91 8439359306</a>
          </div>
          <div class="flex items-center px-4 mb-3">
            <fa-icon name="twitter" class="w-4 fill-current mr-2"></fa-icon>
            <a href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Flocalhost%3A3000%2F&ref_src=twsrc%5Etfw&screen_name=zruman&tw_p=tweetbutton" class="hover:text-white">Tweet me</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection

@section('scripts')
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection