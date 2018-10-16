@extends('_layouts.master')
@section('title', $page->title . ' | Blog')

@section('main-content')
    <article class="blog-post my-12">
        <header class="artile-header text-center mt-4 mb-8">
            <h1 class="mb-4">{{ $page->title }}</h1>
            <address class="author flex items-center justify-center text-sm">
                <time pubdate class="published-date">{{ $page->dateString() }}</time>
                <span class="text-grey-darker mx-2 roman">|</span>
                <span class="read-time inline-flex items-center"><fa-icon height="15" name="clock" class="text-grey-dark fill-current mr-1"></fa-icon> {{ $page->read }} {{str_plural('min', $page->read)}}</span>
                <span class="text-grey-darker mx-2 roman">|</span>
                <a href="{{$page->website}}" rel="author">{{$page->author}}</a>
            </address>
        </header class="artile-header">
        <div class="blog-post-content">
            @yield('content')
        </div>
    </article>
@endsection