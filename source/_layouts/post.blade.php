@extends('_layouts.master')
@section('title', $page->title . ' | Blog')

@section('main-content')
    <article class="blog-post">
        <section class="article-header bg-cover bg-fixed bg-center bg-black" style="background-image: url('{{$page->baseUrl}}/assets/images/covers/{{ $page->cover }}')">
            <div class="bg-black-alpha-{{$page->transparency ?? 90}} pt-navSize pb-3 text-orange">
                <div class="container mx-auto px-4 md:px-8">
                    <header class="flex flex-col justify-center items-center min-h-48 sm:min-h-64 py-8">
                        <h2 class="text-3xl sm:text-4xl mb-4 font-serif font-normal text-center tracking-wide">{{ $page->title }}</h2>
                        <address class="author flex  whitespace-no-wrap items-center text-xs sm:text-sm mb-4 sm:mb-0">
                            <time pubdate class="published-date">{{ $page->dateString() }}</time>
                            <span class="text-grey-darker mx-1 roman ">|</span>
                            <span class="read-time inline-flex items-center"><fa-icon height="10" name="clock" class="text-grey-dark fill-current mr-1"></fa-icon> {{ $page->read }} {{str_plural('min', $page->read)}}</span>
                            <span class="text-grey-darker mx-1 roman ">|</span>
                            <a href="{{$page->website}}" rel="author">{{$page->author}}</a>
                        </address>
                    </header>
                    <ul class="breadcrumbs list-reset flex items-baseline justify-end text-xs uppercase text-grey-dark">
                        <li class="mx-1"><a class="text-orange" href="{{$page->baseUrl}}/"><fa-icon class="fill-current" name="home" width="10"></fa-icon></a></li>
                        <span class="mx-1">/</span>
                        <li class="mx-1"><a class="text-orange hover:text-white" href="{{$page->baseUrl}}/blog">Blog</a></li>
                        <span class="mx-1">/</span>
                        <li class="mx-1">{{$page->title}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="blog-post-content container mx-auto lg:max-w-2/3 p-6 sm:p-8">
            @yield('content')
            <ul class="list-reset flex flex-wrap items-center -mx-2 mt-12">
                @foreach($page->tags as $tag)
                <li class="px-3 py-2 rounded cursor-pointer text-xs uppercase bg-grey-light hover:bg-grey mx-2">{{$tag}}</li>
                @endforeach
            </ul>
        </div>
    </article>
@endsection