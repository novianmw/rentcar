<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            "content" => "Di apps ini kalian mudah buat car sharing n bs jg kl kalian mau jalan2 d dlm kota slama lebaran inii.. driver ny ramaahhh mbl bagus bersih dan baruuu",
            "user_id" => 4,
        ]);
        Testimonial::create([
            "content" => "Semangat untuk bagikan kode referralnya Kakak. Semakin banyak yg menggunakan kode referralmu maka semakin besar kesempatan yg kakak...",
            "user_id" => 2
        ]);
        Testimonial::create([
            "content" => "mobil nya bagus2 banget, ganyesel rental di trevo",
            "user_id" => 3
        ]);
    }
}
