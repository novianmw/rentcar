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
    <div class="hidden md:flex flex-row justify-end items-center gap-5">
        <a href="/login" class="text-sm rounded-full py-2 px-6 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300">
            <p class="text-[14px] lg:text-[16px]">Login</p>
        </a>
        <a href="/register" class="text-sm rounded-full py-2 px-4 border border-black bg-black lg:mt-0 text-white hover:bg-slate-600 duration-300">
            <p class="text-[14px] lg:text-[16px]">Sign Up</p>
        </a>
    </div>
</div>