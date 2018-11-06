@extends('_layouts.master')
@section('main-content')
<section class="bg-cover bg-fixed bg-center" style="background-image: url('{{ $page->baseUrl }}/assets/images/covers/blog-cover.jpg')">
    <div class="bg-black-alpha-90 pt-navSize pb-3">
        <div class="container mx-auto px-4 md:px-8">
            <header class="flex-1 flex flex-col justify-center items-center min-h-48 sm:min-h-64 py-8">
                <h2 class="text-4xl font-sans text-primary mb-2 font-normal">Blog Posts</h2>
            </header>
            <ul class="breadcrumbs list-reset flex items-baseline justify-end text-grey-lighter text-xs uppercase">
                <li class="mx-1"><a class="text-primary" href="{{$page->baseUrl}}/"><fa-icon class="fill-current" name="home" width="10"></fa-icon></a></li>
                <span class="mx-1 text-grey">/</span>
                <li class="mx-1">Blog</li>
            </ul>
        </div>
    </div>
</section>
<main class="lg:max-w-2/3 container mx-auto px-3 md:px-8 py-12">
    @yield('blog-content')
</main>
@endsection