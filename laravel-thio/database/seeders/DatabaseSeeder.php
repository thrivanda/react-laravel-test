<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        menu::create([
            'image' => 'image/1.cumi-tepung.jpg',
            'price' => 'Rp.13.000',
            'name' => 'Cumi Tepung'
        ]);
        menu::create([
            'image' => 'image/2.cumi-bakar.jpg',
            'price' => 'Rp.23.000',
            'name' => 'Cumi Bakar'
        ]);
        menu::create([
            'image' => 'image/3.cumi-cabe-goreng.jpg',
            'price' => 'Rp.21.000',
            'name' => 'Cumi Tepung'
        ]);
        menu::create([
            'image' => 'image/4.cumi-kerang.jpg',
            'price' => 'Rp.43.000',
            'name' => 'Cumi & Tepung'
        ]);
        menu::create([
            'image' => 'image/5.cah-kalian.jpg',
            'price' => 'Rp.19.000',
            'name' => 'Cah Kalian'
        ]);
        menu::create([
            'image' => 'image/6.tahu-goreng.jpg',
            'price' => 'Rp.11.000',
            'name' => 'Tahu Goreng'
        ]);
        menu::create([
            'image' => 'image/7.cah-tauge.jpg',
            'price' => 'Rp.23.000',
            'name' => 'Cah Tauge'
        ]);
        menu::create([
            'image' => 'image/8.sayuran.jpg',
            'price' => 'Rp.13.000',
            'name' => 'Sayuran'
        ]);
        menu::create([
            'image' => 'image/9.kerang-bambu.jpg',
            'price' => 'Rp.29.000',
            'name' => 'Kerang Bambu'
        ]);
        menu::create([
            'image' => 'image/10.kepiting-padang.jpg',
            'price' => 'Rp.61.000',
            'name' => 'Kepiting Padang'
        ]);
        menu::create([
            'image' => 'image/11.gurame-asam.jpg',
            'price' => 'Rp.44.000',
            'name' => 'Gurame Asam'
        ]);
        menu::create([
            'image' => 'image/12.ikan.jpg',
            'price' => 'Rp.13.000',
            'name' => 'Ikan'
        ]);
        menu::create([
            'image' => 'image/13.udang-bakar.jpg',
            'price' => 'Rp.34.000',
            'name' => 'Udang Bakar'
        ]);
        menu::create([
            'image' => 'image/14.udang-saos-tiram.jpg',
            'price' => 'Rp.41.000',
            'name' => 'Udang Saos Tiram'
        ]);
        menu::create([
            'image' => 'image/15.udang-mayonaise.jpg',
            'price' => 'Rp.50.000',
            'name' => 'Udang Mayonaise'
        ]);
        menu::create([
            'image' => 'image/16.minuman.jpg',
            'price' => 'Rp.9.000',
            'name' => 'Minuman'
        ]);
        menu::create([
            'image' => 'image/17.esteh.jpg',
            'price' => 'Rp.6.000',
            'name' => 'Es Teh'
        ]);
        menu::create([
            'image' => 'image/18.esjeruk.jpg',
            'price' => 'Rp.10.000',
            'name' => 'Es Jeruk'
        ]);
        menu::create([
            'image' => 'image/19.air-putih.jpg',
            'price' => 'Rp.0',
            'name' => 'Air Putih'
        ]);
        menu::create([
            'image' => 'image/20.Nasi-goreng.jpg',
            'price' => 'Rp.19.000',
            'name' => 'Nasi-goreng'
        ]);
    }
}
