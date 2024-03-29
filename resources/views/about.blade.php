@extends('layouts.main')

@section('content')
    <div class="w-full flex flex-col justify-center items-center py-10">
        <div class="flex items-center justify-center py-5">
            <h2 class="text-black font-bold text-center lg:text-4xl sm:text-xl">Tentang Kami</h2>
        </div>
        <div class="flex flex-row justify-center items-center py-5 gap-14">
            <div class="w-1/2 flex flex-col items-start justify-start px-14">
                <div class="flex items-center">
                    <h3 class="">Siapa kami</h3>
                </div>
                <div class="flex items-center">
                    <p class="text-justify">Broom.id merupakan sebuah layanan sewa kendaraan berbasis e-commerce dimana Anda dapat menyewa kendaraan untuk jangka waktu tertentu dengan membayar sejumlah uang sewa. Anda dapat menyewa kendaraan untuk perjalanan bisnis, liburan, atau keperluan lainnya. Kami menyediakan berbagai jenis kendaraan yang dapat disesuaikan dengan kebutuhan Anda, serta berbagai pilihan jangka waktu sewa. Kami juga menawarkan asuransi dan pilihan tambahan lainnya untuk memberikan perlindungan dan kenyamanan selama Anda menyewa kendaraan kami.</p>
                </div>
            </div>
            <div class="w-1/2 flex flex-col items-center justify-start px-14">
                <div class="flex flex-row justify-start items-center gap-5">
                    <img class="h-32 w-32" src="assets/images/car logo.png" alt="">
                    <a href="/">
                        <p class="text-[72px]">Broom.id</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center py-10">
        <div class="flex items-center justify-center py-5">
            <h2 class="text-black font-bold text-center lg:text-4xl sm:text-xl">Visi dan Misi</h2>
        </div>
        <div class="w-full flex flex-col items-center justify-center px-14 gap-10">
            <div class="w-full flex flex-col justify-start items-start">
                <div class="flex items-center">
                    <h3 class="">Visi</h3>
                </div>
                <div class="flex items-center">
                    <p class="">Menjadi perusahaan penyewaan kendaraan terkemuka di Indonesia dengan memberikan pelayanan yang cepat, mudah, dan terpercaya.</p>
                </div>
            </div>
            <div class="w-full flex flex-col justify-start items-start">
                <div class="flex items-center">
                    <h3 class="">Misi</h3>
                </div>
                <div class="flex items-center px-5">
                    <ul class="list-decimal">
                        <li>Memberikan pelayanan yang cepat, mudah, dan terpercaya kepada pelanggan kami.</li>
                        <li>Menyediakan kendaraan yang selalu dalam kondisi baik dan bersih.</li>
                        <li>Menyediakan harga yang kompetitif dan fleksibel sesuai dengan kebutuhan pelanggan.</li>
                        <li>Menjaga hubungan baik dengan pelanggan melalui komunikasi yang efektif dan responsif.</li>
                        <li>Terus berinovasi dan meningkatkan kualitas pelayanan kami untuk memberikan pengalaman yang memuaskan bagi pelanggan kami.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endSection