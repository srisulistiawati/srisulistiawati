<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Srii',
            'email' => 'sri@gmail.com',
            'password' => bcrypt('12345'),
            
        ]);
        Product::create([
            'name'=>'Pashmina Silk',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat dari bahan kanvas yang berkualitas sehingga nyaman dipakai',
            'foto'=>'kerudung.jpg',
        ]);
        Product::create([
            'name'=>'Pashmina Kaos',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat dari bahan yang bikin adem, jadi gaada drama solat kepanasan lagi yaa',
            'foto'=>'5.jpg',
        ]);
        Product::create([
            'name'=>'Pashmina Cerutty',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'6.jpg',
        ]);
        Product::create([
            'name'=>'Pashmina Crinkle',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'9.jpg',
        ]);
        Product::create([
            'name'=>'Paris Jadul',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'7.jpg',
        ]);
        Product::create([
            'name'=>'Kerudung Sport',
            'harga'=>'30000',
            'deskripsi'=>'Terbuat Bahan nya lembut sehingga membuat solat anda lebih nyaman.',
            'foto'=>'10.jpg',
        ]);
    }
}
