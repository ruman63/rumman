@extends('_layouts.master')
@section('head')
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">     
@endsection
@section('body')
<div id="app">
    @include('_partials.header')
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
                            @foreach($skills as $skill)
                <v-tooltip position="top">
                                    <button title="{{$skill->name}}" class="text-white hover:text-{{$skill->background}} focus:text-{{$skill->background}} mx-2">
                                        <fa-icon name="{{$skill->icon}}" class="fill-current h-6"></fa-icon>
                  </button>
                                    <div slot="content" class="relative p-4 w-64 bg-{{$skill->background}} text-{{$skill->foreground}} rounded shadow">
                                        <h5 class="mb-2">{{$skill->name}}</h5>
                                        {!! $skill->getContent() !!}
                  </div>
                </v-tooltip>
                            @endforeach
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="coming" class="h-screen flex items-center justify-center">
      <h1 class="text-2xl md:text-5xl">Coming Soon !</h1>
    </section>
    @include('_partials.footer')
  </div>
@endsection

@section('scripts')
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection