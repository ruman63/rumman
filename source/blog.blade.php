@extends('_layouts.blog')
@section('title', 'Blog | Ruman Saleem')
@section('blog-content')
@foreach($posts as $post)
    <article class="py-3 flex flex-col text-black border-b">
        <h3 class="font-semibold capitalize mb-3"><a class="hover:underline" href="{{ $post->getPath() }}">{{ $post->title }}</a></h3>
        <div class="md:flex md:justify-between md:items-center">
            <address class="author flex items-center text-sm mb-2 md:mb-0">
                <time pubdate class="published-date whitespace-nowrap">{{ $post->dateString() }}</time>
                <span class="text-grey-darker mx-2 roman">|</span>
                <span class="read-time inline-flex items-center whitespace-nowrap">
                    <fa-icon height="15" name="clock" class="text-grey-dark fill-current mr-1"></fa-icon>
                    <span class="whitespace-nowrap">{{ $post->read }} {{str_plural('min', $post->read)}}</span>
                </span>
                <span class="text-grey-darker mx-2 roman">|</span>
                <a class="whitespace-nowrap" href="{{$page->website}}" rel="author">{{$post->author}}</a>
            </address>
            <ul class="list-reset flex flex-wrap -mx-1 text-2xs uppercase">
                @foreach($post->tags as $tag)
                <li class="bg-primary-dark py-1 px-2 rounded text-white font-semibold mx-1 whitespace-nowrap my-1">{{$tag}}</li>
                @endforeach
            </ul>
        </div>
    </article>
@endforeach
@endsection