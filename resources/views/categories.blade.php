@extends('layouts.main')


@section('content')
    <div class="w-full flex justify-center items-center">
        <h1 class="">Halaman Categories</h1>
    </div>
    <div class="w-full flex flex-col justify-start items-start">
        @foreach ($categories as $category)          
            <ul>
                <li>
                    <h3 class="font-semibold text-[24px]">
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    </h3>
                </li>
            </ul>
        @endforeach
    </div>
@endSection