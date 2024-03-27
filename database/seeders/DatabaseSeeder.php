<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\VehicleBrand;
use App\Models\VehicleType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); // seed random 10 user

        Category::create([
            'name' => 'General',
            'slug' => 'general'
        ]);
        Category::create([
            'name' => 'Customer Service',
            'slug' => 'customer-service'
        ]);
        Category::create([
            'name' => 'Account',
            'slug' => 'account'
        ]);

        Faq::create([
            'name' => 'Apa itu Broom.id ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi labore amet fugiat incidunt! Neque, error! Fuga voluptate quibusdam saepe ex laborum accusantium voluptatum, placeat maiores porro explicabo dignissimos, autem commodi id hic reprehenderit cupiditate, velit alias? Distinctio recusandae minima placeat asperiores quos. Ipsum maxime cum mollitia architecto non dolores corporis, libero temporibus rerum itaque a minima reprehenderit? A optio eius maxime excepturi, reprehenderit repellat aut modi. Pariatur quod exercitationem illo sapiente quae. Vitae, aspernatur facere vel assumenda soluta rerum non. Laborum dignissimos sint ipsa quam minima deleniti, voluptas eaque nostrum tempore. Assumenda doloremque cumque dignissimos odio accusantium exercitationem libero!',
            'category_id' => 1
        ]);
        Faq::create([
            'name' => 'Bagiamana cara mendapatkan bantuan dari layanan pelanggan Broom.id ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi labore amet fugiat incidunt! Neque, error! Fuga voluptate quibusdam saepe ex laborum accusantium voluptatum, placeat maiores porro explicabo dignissimos, autem commodi id hic reprehenderit cupiditate, velit alias? Distinctio recusandae minima placeat asperiores quos. Ipsum maxime cum mollitia architecto non dolores corporis, libero temporibus rerum itaque a minima reprehenderit? A optio eius maxime excepturi, reprehenderit repellat aut modi. Pariatur quod exercitationem illo sapiente quae. Vitae, aspernatur facere vel assumenda soluta rerum non. Laborum dignissimos sint ipsa quam minima deleniti, voluptas eaque nostrum tempore. Assumenda doloremque cumque dignissimos odio accusantium exercitationem libero!',
            'category_id' => 1
        ]);
        Faq::create([
            'name' => 'Dimana Broom.id tersedia ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi labore amet fugiat incidunt! Neque, error! Fuga voluptate quibusdam saepe ex laborum accusantium voluptatum, placeat maiores porro explicabo dignissimos, autem commodi id hic reprehenderit cupiditate, velit alias? Distinctio recusandae minima placeat asperiores quos. Ipsum maxime cum mollitia architecto non dolores corporis, libero temporibus rerum itaque a minima reprehenderit? A optio eius maxime excepturi, reprehenderit repellat aut modi. Pariatur quod exercitationem illo sapiente quae. Vitae, aspernatur facere vel assumenda soluta rerum non. Laborum dignissimos sint ipsa quam minima deleniti, voluptas eaque nostrum tempore. Assumenda doloremque cumque dignissimos odio accusantium exercitationem libero!',
            'category_id' => 1
        ]);
        Faq::create([
            'name' => 'Saya mengalami masalah dengan aplikasi. Bagaimana saya menyelesaikannya ?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque magnam eaque assumenda exercitationem unde facilis perferendis qui excepturi inventore nemo odio dignissimos, suscipit laboriosam soluta, est illo fuga incidunt expedita?', 
            'category_id' => 2
        ]);
        Faq::create([
            'name' => 'Bagiamana cara mendapatkan bantuan dari layanan pelanggan Broom.id ?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque magnam eaque assumenda exercitationem unde facilis perferendis qui excepturi inventore nemo odio dignissimos, suscipit laboriosam soluta, est illo fuga incidunt expedita?', 
            'category_id' => 2
        ]);
        Faq::create([
            'name' => 'Bagaimana cara membuat akun di aplikasi Sewa Mobil Broom.id ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus accusantium cum est consequuntur dignissimos explicabo vero dolore ipsa excepturi. Aspernatur optio repellat eos illum laborum sapiente quidem nam dolorum?',
            'category_id' => 3
        ]);
        Faq::create([
            'name' => 'Berapa lama proses verifikasi akun ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus accusantium cum est consequuntur dignissimos explicabo vero dolore ipsa excepturi. Aspernatur optio repellat eos illum laborum sapiente quidem nam dolorum?',
            'category_id' => 3
        ]);
        Faq::create([
            'name' => 'Saya perlu memesan mobil segera, dapatkah Broom.id mempercepat verifikasi akun saya ?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus accusantium cum est consequuntur dignissimos explicabo vero dolore ipsa excepturi. Aspernatur optio repellat eos illum laborum sapiente quidem nam dolorum?',
            'category_id' => 3
        ]);

        VehicleType::create([
            'name' => 'Sedan',
            'type' => 'sedan',
            'image' =>'sedans.png',
            'alt' => 'Sedan'
        ]);
        VehicleType::create([
            'name' => 'Hatchback',
            'type' => 'hatchback',
            'image' => 'hatch.png',
            'alt' => 'Hatchback'
        ]);
        VehicleType::create([
            'name' => 'SUV',
            'type' => 'suv',
            'image' => 'suvs.png',
            'alt' => 'SUV'
        ]);
        VehicleType::create([
            'name' => 'Sport',
            'type' => 'sport',
            'image' => 'sportcars.png',
            'alt' => 'Sport'
        ]);
        VehicleType::create([
            'name' => 'EV',
            'type' => 'ev',
            'image' => 'ev.png',
            'alt' => 'EV'
        ]);
        
        VehicleBrand::create([
            'name' => 'Toyota',
            'brand' => 'toyota',
            'image' => 'toyota logo.avif',
            'alt' => 'Toyota' 
        ]);
        VehicleBrand::create([
            'name' => 'Honda',
            'brand' => 'honda',
            'image' => 'honda logo.png',
            'alt' => 'Honda' 
        ]);
        VehicleBrand::create([
            'name' => 'Nissan',
            'brand' => 'nissan',
            'image' => 'nissan Loogo.avif',
            'alt' => 'Nissan' 
        ]);
        VehicleBrand::create([
            'name' => 'Daihatsu',
            'brand' => 'daihatsu',
            'image' => 'daihatsu logo.avif',
            'alt' => 'Daihatsu' 
        ]);
        VehicleBrand::create([
            'name' => 'Suzuki',
            'brand' => 'suzuki',
            'image' => 'suzuki logo.png',
            'alt' => 'Suzuki' 
        ]);
        VehicleBrand::create([
            'name' => 'Hyundai',
            'brand' => 'hyundai',
            'image' => 'hyundai logo.avif',
            'alt' => 'Hyundai' 
        ]);
        VehicleBrand::create([
            'name' => 'Mitsubishi',
            'brand' => 'mitsubishi',
            'image' => 'mitsubishi logo.avif',
            'alt' => 'Mitsubishi' 
        ]);
        VehicleBrand::create([
            'name' => 'Chevrolet',
            'brand' => 'chevrolet',
            'image' => 'chevrolet logo.avif',
            'alt' => 'Chevrolet' 
        ]);

        $this->call([
            UserSeeder::class,
            TestimonialSeeder::class,
            VehicleSeeder::class
         ]);
        
        // \App\Models\User::factory()->create([ // seed 1 user
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::create([
        //     'title' => 'Apa itu Broom.id ?',
        //     'slug' => 'apa-itu-broom-id',
        //     'excerpt' => 'Broom.id adalah aplikasi sewa mobil di mana Guest dapat melakukan sewa mobil apa pun yang sesuai dengan kebutuhan dan keinginan untuk perjalanan yang akan mereka lakukan, dari Host terdekat yang terdaftar di aplikasi Broom.id.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi labore amet fugiat incidunt! Neque, error! Fuga voluptate quibusdam saepe ex laborum accusantium voluptatum, placeat maiores porro explicabo dignissimos, autem commodi id hic reprehenderit cupiditate, velit alias? Distinctio recusandae minima placeat asperiores quos. Ipsum maxime cum mollitia architecto non dolores corporis, libero temporibus rerum itaque a minima reprehenderit? A optio eius maxime excepturi, reprehenderit repellat aut modi. Pariatur quod exercitationem illo sapiente quae. Vitae, aspernatur facere vel assumenda soluta rerum non. Laborum dignissimos sint ipsa quam minima deleniti, voluptas eaque nostrum tempore. Assumenda doloremque cumque dignissimos odio accusantium exercitationem libero!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Dimana Broom.id tersedia ?',
        //     'slug' => 'dimana-broom-id-tersedia',
        //     'excerpt' => 'Mobil rental yang terdaftar lewat aplikasi Broom.id saat ini tersebar di area berikut ini: Jakarta, Bali, Bandung, Medan, Yogyakarta, Surabaya, Malang, Semarang, Makassar, Palembang.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos commodi labore amet fugiat incidunt! Neque, error! Fuga voluptate quibusdam saepe ex laborum accusantium voluptatum, placeat maiores porro explicabo dignissimos, autem commodi id hic reprehenderit cupiditate, velit alias? Distinctio recusandae minima placeat asperiores quos. Ipsum maxime cum mollitia architecto non dolores corporis, libero temporibus rerum itaque a minima reprehenderit? A optio eius maxime excepturi, reprehenderit repellat aut modi. Pariatur quod exercitationem illo sapiente quae. Vitae, aspernatur facere vel assumenda soluta rerum non. Laborum dignissimos sint ipsa quam minima deleniti, voluptas eaque nostrum tempore. Assumenda doloremque cumque dignissimos odio accusantium exercitationem libero!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Lain',
        //     'slug' => 'judul-lain',
        //     'excerpt' => 'optio reiciendis architecto.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas adipisci optio reiciendis architecto. Enim, provident. Quo deleniti voluptas quisquam, porro mollitia cum iste recusandae nemo, id laboriosam dolores ipsam nobis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul baru',
        //     'slug' => 'judul-baru',
        //     'excerpt' => 'optio reiciendis architecto.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas adipisci optio reiciendis architecto. Enim, provident. Quo deleniti voluptas quisquam, porro mollitia cum iste recusandae nemo, id laboriosam dolores ipsam nobis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
