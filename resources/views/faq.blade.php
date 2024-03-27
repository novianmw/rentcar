@extends('layout.main')


@section('content')
    <div class="w-full flex flex-col items-center py-5">
        <div class="flex items-center">
            <h2 class="text-[70px] font-semibold text-center">Kami selalu ada di sini untukmu</h2>
        </div>
        <div class="flex items-center">
            <h3 class="text-[40px] font-normal text-center">Apa yang bisa kami bantu hari ini?</h3>
        </div>
    </div>
    <div class="w-full flex flex-col items-start px-14">
        <div class="py-4 w-full ">
            <form action="/faq">
                <input name="search" value="{{ request('search') }}" type="text" placeholder="Cari" name="search" class="py-4 pl-5 w-[300px] text-sm text-gray-900 bg-gray-100 rounded-xl border border-gray-300">
                <button type="submit" class="-ml-5 py-4 px-4 text-sm text-slate-200 bg-black rounded-xl border border-black ">Submit</button>
            </form>
        </div>
        <div class="flex items-center border-b-2 overflow-auto">
            @foreach ($categories as $category)
            <div class="border-b-14 border-transparent text-lg py-6 mr-8 cursor-pointer">
                <a href="/faq/{{ $category->slug }}">{{ $category->name }}</a>
            </div>
            @endforeach
        </div>
        @if ($faqs->count())
        <div class="flex flex-col items-center py-10">
            @foreach ($faqs as $faq)
            <div class="cursor-pointer py-6">
                <div class="flex text-xl mr-8 gap-5">
                    <p class="">+</p>
                    <p class="">{{ $faq->name }}</p>
                </div>
                <div class="px-12 ml-1 overflow-hidden linear-trans h-auto mb-6">
                    <div class="">
                        <p class="">{{ $faq->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="w-full flex flex-col justify-start items-center py-10 px-20">
            <p class="font-normal text-center text-[32px]">No faqs found</p>
        </div>
        @endif
    </div>
@endSection