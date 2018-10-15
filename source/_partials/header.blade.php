<header class="w-full{{$fixedHeader ? ' fixed ' : ' '}}pin-t pin-x z-50">
  <div class="nav-wrapper{{$fixedHeader ? '': ' nav-fixed'}}" {{ $fixedHeader ? 'v-fix-top="nav-fixed"' : '' }}>
      <div class="container mx-auto">
        <nav class="flex justify-between px-3 md:px-8">
          <div class="brand">
            <h1 class="text-orange hover:text-white font-display">
              <a href="{{$page->baseUrl}}/">RS</a>
            </h1>
          </div>
          <nav-menu>
            <li class="nav-link"><a href="#coming">About</a></li>
            <li class="nav-link {{ $page->active('blog') }}"><a href="{{ $page->baseUrl }}/blog">Blog</a></li>
            <li class="nav-link"><a href="#coming">My Work</a></li>
            <li class="nav-link"><a href="#coming">Contact</a></li>
          </nav-menu>
        </nav>
      </div>
    </div>
  </header>