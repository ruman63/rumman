@extends('_layouts.master')
@section('title', $page->title . ' | Blog')

@section('main-content')
    <scroll-progress data-container="#post">
        <div slot-scope="{ progress }" 
            class="fixed pin-x pin-t h-1 bg-primary z-50 transition:width" 
            :style="{width: `${progress}%`}"></div>
    </scroll-progress>
    <article class="blog-post">
        <section class="article-header bg-cover bg-fixed bg-center bg-black" style="background-image: url('{{$page->baseUrl}}/assets/images/covers/{{ $page->cover }}')">
            <div class="bg-black-alpha-{{$page->transparency ?? 90}} pt-navSize h-64 pb-3 text-primary flex flex-col justify-end">
                <div class="container mx-auto px-4 md:px-8">
                    <ul class="breadcrumbs list-reset flex items-baseline text-xs uppercase text-grey-dark">
                        <li class="mx-1"><a class="text-primary" href="{{$page->baseUrl}}/"><fa-icon class="fill-current" name="home" width="10"></fa-icon></a></li>
                        <span class="mx-1">/</span>
                        <li class="mx-1"><a class="text-primary hover:text-white" href="{{$page->baseUrl}}/blog">Blog</a></li>
                        <span class="mx-1">/</span>
                        <li class="mx-1">{{$page->title}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <article class="container mx-auto lg:max-w-2/3 mb-16">
            <main id="post" class="blog-post-content p-6 sm:p-8">
                <syntax-highlight>
                    @yield('content')
                </syntax-highlight>
            </main>
            <ul class="list-reset flex flex-wrap items-center -mx-2 mt-12">
                @foreach($page->tags as $tag)
                <li class="px-3 py-2 rounded cursor-pointer text-xs uppercase bg-grey-light hover:bg-grey mx-2">{{$tag}}</li>
                @endforeach
            </ul>
            <comment-box></comment-box>
        </article>
    </article>
@endsection