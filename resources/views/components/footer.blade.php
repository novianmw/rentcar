<footer>
    <div class="w-full flex flex-col items-center py-5 bg-blue-900">
        <div class="w-full h-full flex flex-col md:flex-row items-center md:items-start px-10 gap-10">
            <div class="flex flex-col justify-between">
                <div class="flex flex-col justify-start items-start pb-6">
                    <a href="/">
                        <div class="flex flex-row justify-start items-center gap-5">
                            <img class="w-5 md:w-8 lg:w-10" src="{{ asset('assets/images/car logo.png') }}" alt="">
                            <p class="text-[16px] md:text-[20px] lg:text-[24px]">Broom.id</p>
                        </div>
                    </a>
                    <div class="flex items-center py-2">
                        <h2 class="font-light text-[16px] text-justify text-slate-300">Broom.id merupakan layanan sewa kendaraan berbasis e-commerce untuk kemudahan memilih kendaraan yang diinginkan. tersedia di Pulau Jawa dan Bali</h2>
                    </div>
                    <div class="w-full flex flex-row justify-start items-center py-2 gap-5">
                        <div class="w-5 md:w-10 text-slate-300">
                            <x-ri-instagram-line />
                        </div>
                        <div class="w-5 md:w-10 text-slate-300">
                            <x-fab-x-twitter />
                        </div>
                        <div class="w-6 md:w-12 text-slate-300">
                            <x-ri-youtube-line />
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col items-start">
                <div class="flex flex-col">
                    <h3 class="text-[16px] md:text-[20px] lg:text-[24px] font-semibold text-slate-300">Berlangganan Newsletter Kami</h3>
                    <p class="font-normal text-slate-300">Dapatkan diskon terbaru, promosi & keuntungan eksklusif yang dikirimkan langsung ke email Anda.</p>
                </div>
                <div class="w-full flex flex-row py-5">
                    <form class="w-full flex flex-row" action="">
                        <input class="py-4 pl-5 w-full text-sm text-gray-900 bg-gray-100 rounded-xl border border-gray-300" type="email" name="email" placeholder="Alamat Email . . . ">
                        <button type="submit" class="-ml-5 border-2 rounded-xl px-4 bg-black border-black text-slate-200">Submit</button>
                    </form>
                </div>
                {{-- TODO:  LOOP in data  --}}
                <div class="w-full flex flex-wrap flex-col md:flex-row justify-between items-start md:items-center gap-5 py-5">
                    <div class="flex flex-col gap-2">
                        <p class="text-semibold text-slate-300">Layanan</p>
                        <a class="text-light text-slate-500" href="">Sewa Motor</a>
                        <a class="text-light text-slate-500" href="">Sewa Mobil</a>
                        <a class="text-light text-slate-500" href="">menjadi mitra</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-semibold text-slate-300">Bantuan</p>
                        <a class="text-light text-slate-500" href="">Sewa Motor</a>
                        <a class="text-light text-slate-500" href="">Sewa Mobil</a>
                        <a class="text-light text-slate-500" href="">menjadi mitra</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-semibold text-slate-300">Tentang</p>
                        <a class="text-light text-slate-500" href="">Sewa Motor</a>
                        <a class="text-light text-slate-500" href="">Sewa Mobil</a>
                        <a class="text-light text-slate-500" href="">menjadi mitra</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-semibold text-slate-300">Mitra Pelayanan</p>
                        <a class="text-light text-slate-500" href="">Sewa Motor</a>
                        <a class="text-light text-slate-500" href="">Sewa Mobil</a>
                        <a class="text-light text-slate-500" href="">menjadi mitra</a>
                    </div>
                </div>
                {{-- END TODO --}}
            </div>
        </div>
        <div class="w-full flex flex-col justify-start items-start py-5 px-10">
            <div class="pb-2">
                <p class="text-xs text-slate-300">Unduh Aplikasinya</p>
            </div>
            <div class="flex flex-row gap-5">
                <a href="#">
                    <img class="w-20 md:w-32" src="{{ asset('assets/Images/App store.png') }}" alt="App Store">
                </a>
                <a href="#">
                    <img class="w-20 md:w-32" src="{{ asset('Assets/Images/Google Play.png') }}" alt="Google Play">
                </a>
            </div>
        </div>
        <div class="w-full flex justify-center items-center pt-3 border-t border-t-gray-600 bg-blue-900">
            <p class="text-gray-500 text-center">© 2024 Created By Novianmw</p>
        </div>
    </div>
</footer>