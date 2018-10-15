@extends('_layouts.master', ['fixedHeader' => true])
@section('main-content')
<section class="hero-section" style="background-image: url('{{ $page->baseUrl }}/assets/images/bg.jpg');">
    <div class="hero-overlay">
        <div class="flex-1 flex flex-col justify-center w-full">
            <div class="container mx-auto">
                <div class="hero-display">
                    <h1 class="name">Rumman Saleem</h1>
                    <h3 class="designation">Web Developer</h3>  
                    <p class="social-links">
                        <a href="https://twitter.com/zruman" class="text-blue-light social-link"><fa-icon name="twitter" class="social-icon"></fa-icon></a>
                        <a href="https://github.com/ruman63" class="text-grey-light social-link"><fa-icon name="github" class="social-icon"></fa-icon></a>
                        <a href="https://stackoverflow.com/users/6550225/ruman" class="text-orange social-link"><fa-icon name="stack-overflow" class="social-icon"></fa-icon></a>
                    </p>
                    {{-- <!-- <p class="mb-6 leading-normal text-xl">I work as a Freelancer. I have worked on a variety of Websites, from simple static websites to highly reactive administrator's Dashboard. I am always looking for web projects, to work for cool people out there. <br> Just like you ;)</p> --> --}}
                    <div class="hero-skills">
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
@endsection

@section('scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection