
@extends('layout.main')

@section('content')
    <div class="gap-10">
        <article class="mb-5">
            <h3 class="font-semibold text-[24px]">{{ $post->title }}</h3> {{-- mengambil data namun dengan HTMLspecial chart/blade escape character --}}
            <p class="">Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p class="font-normal ">By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
            <p class="font-normal ">{!! $post->body !!}</p> {{-- mengambil data namun dengan tag didalamnya  --}}

        </article>
        <a href="/testimonial">BACK TO POST</a>
    </div>
@endsection