@extends('layouts.main')


@section('content')
    <div class="w-full flex justify-center items-center">
        <h1 class="">Halaman Authors</h1>
    </div>
    <div class="w-full flex flex-col justify-start items-start">
        @foreach ($authors as $author)          
            <ul>
                <li>
                    <h3 class="font-semibold text-[24px]">
                        <a href="/authors/{{ $author->id }}">{{ $author->firstName }}</a>
                    </h3>
                </li>
            </ul>
        @endforeach
    </div>
@endSection