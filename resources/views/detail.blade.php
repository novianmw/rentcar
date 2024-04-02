@extends('layouts.main')

@section('content')
<div class="flex flex-col items-center">
    <div class="flex w-full justify-center md:justify-start items-center px-14">
        <h3 class="lg:text-2xl sm:text-lg text-black">Sewa Kendaraan</h3>
    </div>
    @if ($vehicles->count())
        <div class="flex w-full justify-center md:justify-start items-center px-14">
            <p class="">
                {{ request('location') }} • {{ request('start_date') }} - {{ request('end_date') }}
            </p>
        </div>
    @endif
</div>
<div class="w-full flex flex-row items-start py-10 gap-5">
    <div class="flex items-center w-full">
        <img class="rounded-r-lg" src="{{ asset('assets/Images/hanson-lu-MOHTDu-68no-unsplash.jpg') }}" alt="">
    </div>
    <div class="flex flex-col items-start px-5 py-3 w-2/3">
        <div class="flex flex-col items-start py-5 gap-5">
            <div class="flex items-start">
                <h3 class="font-semibold text-gray-900">{{ $vehicles->year }} {{ ucfirst($vehicles->vehicleBrand->brand) }} {{ $vehicles->model }}</h3>
            </div>
            <div class="flex items-center">
                <p class="">{{ ucfirst($vehicles->vehicleType->type) }} | {{ $vehicles->transmission }}</p>
            </div>
            <div class="flex items-center">
                <p class="">{{ $vehicles->seat }} Seat</p>
            </div>
        </div>
        <div class="w-full flex flex-col items-start py-5 gap-5 border-y-2">
            <div class="flex items-start">
                <h3 class="">Features</h3>
            </div>
            <div class="flex flex-row items-start gap-16">
                <div class="flex items-start">
                    <p class="">Insurance</p>
                </div>
                <div class="flex items-start">
                    <p class="">No Deposit</p>
                </div>
                <div class="flex items-start">
                    <p class="">Refundable</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start py-5 gap-5">
            <div class="flex items-start">
                <h3 class="font-semibold text-gray-900">Price Detail</h3> {{-- using database year, brand, name --}}
            </div>
            <div class="flex items-center">
                <p class="">Total Price</p>
            </div>
            <div class="flex items-center">
                <p class="">IDR {{ number_format($vehicles->price, 0, ',', '.') }} </p>
            </div>
        </div>
        <div class="w-full flex items-start py-3 gap-5">
            <button class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-6 text-center" href="#">
                Sewa Kendaraan
            </button>
        </div>
    </div>
</div>
@endSection