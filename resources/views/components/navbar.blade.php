<div class="w-full flex justify-between items-center p-6 ">
    <a href="/">
        <div class="flex flex-row justify-start items-center gap-5">
            <img class="w-5 md:w-8 lg:w-10" src="{{ asset('assets/images/car logo.png') }}" alt="">
            <p class="text-[16px] md:text-[20px] lg:text-[24px]">Broom.id</p>
        </div>
    </a>
    {{-- TODO : MAKE for responsive phone, add NAVBAR MENU HAMBURGER --}}
    <div class="hidden md:flex flex-row justify-center items-center gap-5 md:gap-10">
        <a class="py-2 px-5 text-[16px] text-black hover:border-slate-200 hover:rounded-full hover:bg-slate-200 duration-300" href="/about">About</a>
        <a class="py-2 px-5 text-[16px] text-black hover:border-slate-200 hover:rounded-full hover:bg-slate-200 duration-300" href="/faq">FAQ</a>
        <a class="py-2 px-5 text-[16px] text-black hover:border-slate-200 hover:rounded-full hover:bg-slate-200 duration-300" href="/">Join Us</a>
    </div>
    @if (Route::has('login'))
    <div class="hidden md:flex flex-row justify-end items-center gap-5">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm rounded-full py-2 px-6 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300">
                <p class="text-[14px] lg:text-[16px]">Dashboard</p>
            </a>
            <form class="text-sm rounded-full py-2 px-6 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300" method="POST" action="{{ route('logout') }}">
                @csrf
                <button href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm rounded-full py-2 px-6 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300">
                <p class="text-[14px] lg:text-[16px]">Login</p>
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm rounded-full py-2 px-4 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300">
                    <p class="text-[14px] lg:text-[16px]">Sign Up</p>
                </a>
            @endif
        @endauth
    </div>
    @endif
</div>