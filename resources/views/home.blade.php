@extends('layouts.main')

@section('content')
    <div class="w-full flex flex-col justify-start items-center">
        <div class="flex items-center">
            <img class="object-cover h-[50vh] w-screen" src="assets/images/Header.jpg" alt="">
        </div>
        <div class="flex items-center my-10 mx-14 overflow-auto">
            <h2 class="text-black font-bold text-center text-[20px] lg:text-[36px] ">Akses sewa kendaraan dengan berbagai mereka dan tipe</h2>
        </div>
    </div>
    <div class="w-full flex justify-center items-center">
        <div class="border-2 border-slate-400 shadow-lg rounded-lg w-full mx-14">
            <form action="/rent">
                <div class="flex flex-col items-center">
                    <div class="flex w-full justify-center md:justify-start items-center px-14 py-3">
                        <h3 class="lg:text-2xl sm:text-lg text-black">Sewa Kendaraan</h3>
                    </div>
                    <div class="w-full flex flex-col md:flex-row justify-center items-center border-t-2 border-b-2">
                        <div class="max-w-1/3 w-full flex flex-col items-center border-b-2 border-r-0 md:border-r-2 md:border-b-0 py-3 gap-5">
                            <div class="flex justify-center">
                                <p class="">Lokasi Sewa</p>
                            </div>
                            <div class="flex justify-center">
                                <x-ri-road-map-fill class="w-5 h-5" />
                                <input required value="Bali" name="location" class="text-center" type="text" placeholder="Pilih Lokasi Sewa">
                            </div>
                        </div>
                        <div class="max-w-1/3 w-full flex flex-col items-center border-b-2 border-r-0 md:border-r-2 md:border-b-0 py-3 gap-5">
                            <div class="flex justify-center">
                                <p class="">Tanggal Mulai</p>
                            </div>
                            <div class="flex justify-center">
                                <input name="start_date" value="{{ now()->addDay()->format('Y-m-d') }}" class="text-center" type="date" min="{{ now()->addDay(1)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="max-w-1/3 w-full flex flex-col items-center py-3 gap-5">
                            <div class="flex justify-center">
                                <p class="">Tanggal Berakhir</p>
                            </div>
                            <div class="flex justify-center">
                                <input name="end_date" value="{{ now()->addDay(2)->format('Y-m-d') }}" class="text-center" type="date" min="{{ now()->addDay(2)->format('Y-m-d') }}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center px-14 py-3">
                    <div class="flex w-full justify-center md:justify-start items-center">
                        <h3 class="lg:text-2xl sm:text-lg text-black pb-3">Tipe Kendaraan <span>(optional)</span></h3>
                    </div>
                    <div class="w-full flex flex-row flex-wrap items-center justify-around gap-10">
                        @foreach ($types as $type)
                        <div class="block justify-center items-center">
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="type" value="{{ $type->type }}" >
                                <img src="assets/images/{{ $type->image }}" alt="{{ $type->alt }}" class="mb-2">
                                <span class="font-normal text-center">{{ $type->name }}</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col items-center px-14 py-3">
                    <div class="flex w-full justify-center md:justify-start items-center ">
                        <h3 class="lg:text-2xl sm:text-lg text-black pb-3">Tipe Brand <span>(optional)</span></h3>
                    </div>
                    <div class="w-full flex flex-row flex-wrap items-center justify-around gap-10">
                        @foreach ($brands as $brand)
                        <div class="block justify-center items-center">
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="brand" value="{{ $brand->brand }}">
                                    <img class="w-10 h-10" src="assets/images/{{ $brand->image }}" alt={{ $brand->alt }}>
                                </input>
                            <span class="font-normal text-center">{{ $brand->name }}</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full flex justify-center md:justify-end items-center md:pr-14 py-5">
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" href="#">
                        Cari Mobil
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-full flex flex-col items-center">
        <div class="flex items-center my-10">
            <h2 class="text-black font-bold text-center lg:text-4xl sm:text-xl">Rekomendasi Kendaraan Pilihan</h2>
        </div>
        <div class="w-full flex items-center bg-green-400 py-10">
            <div class="w-full flex flex-wrap items-center justify-between py-5 px-14 gap-5">
                @foreach ($vehicles->shuffle()->take(4) as $vehicle)
                {{-- <form action="/detail">
                    <input type="hidden" name="id" value="{{ $vehicle->id }}">
                    <input type="hidden" name="type" value="{{ $vehicle->vehicleType->type }}">
                    <input type="hidden" name="brand" value="{{ $vehicle->vehicleBrand->brand }}">
                    <input type="hidden" name="location" value="{{ request('location', 'Bali') }}">
                    <input type="hidden" name="start_date" value="{{ now()->addDay()->format('Y-m-d') }}">
                    <input type="hidden" name="end_date" value="{{ now()->addDay(2)->format('Y-m-d') }}"> --}}
                    <div class="flex flex-col items-start bg-white border-2 shadow-lg rounded-lg w-[300px] gap-5">
                        <div class="flex items-center">
                            <img class="rounded-t-lg" src="Assets/Images/hanson-lu-MOHTDu-68no-unsplash.jpg" alt="">
                        </div>
                        <div class="flex items-center px-5">
                            <h3 class="font-semibold text-gray-900">{{ $vehicle->year }} {{ ucfirst($vehicle->vehicleBrand->brand) }} {{ $vehicle->model }}</h3>
                        </div>
                        <div class="flex flex-col items-start px-5">         
                            <div class="flex items-center">
                                <p class="">{{ ucFirst($vehicle->transmission) }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="">{{ ucFirst($vehicle->vehicleType->name) }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="">Seat : {{ $vehicle->seat }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="">Location : {{ $vehicle->location }}</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row justify-between items-center p-5 gap-5">
                            <div class="flex items-center">
                                <p class="">IDR {{ number_format($vehicle->price, 0, ',', '.') }} </p>
                            </div>
                            <div class="flex items-center">
                                <a href="{{ url('/detail') }}?id={{ $vehicle->id }}type={{ $vehicle->vehicleType->type }}&brand={{ $vehicle->vehicleBrand->brand }}&location={{ $vehicle->location }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                                    PILIH
                                </a>
                            </div>
                        </div>
                    </div>      
                {{-- </form> --}}
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col items-center">
        <div class="flex items-center my-10">
            <h2 class="text-black font-bold text-center lg:text-4xl sm:text-xl">Apa kata mereka tentang kami</h2>
        </div>
        @if ($testimonials->count()) 
        <div class="w-full flex flex-col justify-start items-start py-10 px-20">
            @foreach ($testimonials as $testi)
                <article class="mb-5 border-b-2 pb-3 w-full">
                    <h3 class="font-semibold text-[24px]">
                        {{ $testi->user->name }}
                    </h3>
                    <p class="font-normal">{{ $testi->content }}</p>
                </article>      
            @endforeach
        </div>
        @else 
        <div class="w-full flex flex-col justify-start items-center py-10 px-20">
            <p class="font-normal text-center text-[32px]">No testimonials posted</p>
        </div>
        @endif
    </div>
    
@endSection