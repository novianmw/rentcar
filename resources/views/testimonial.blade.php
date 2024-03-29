@extends('layouts.main')


@section('content')
    <div class="w-full flex justify-center items-center">
        <h1 class="">{{ $title }}</h1>
    </div>
    <div class="w-full flex flex-col justify-start items-start">
        @foreach ($posts as $post)
            <article class="mb-5 border-b-2 pb-3 w-full">
                <h3 class="font-semibold text-[24px]">
                    <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                </h3>
                <p class="font-normal ">By <a href="/authors/{{ $post->author->id }}"> {{ $post->author->firstName }}</a></p>
                <p class="font-normal ">In <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
                <p class="font-normal ">{{ $post->excerpt }}</p>
                <a href="/post/{{ $post->slug }}">Read More. . .</a>
            </article>
            
        @endforeach
    </div>
@endSection