<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
        [
            'nama' => 'Pakaian 1',
            'ketegori' => 'Pria',
            'harga' => 50000,
            'image' => 'css/images/big1.jpg'
        ],
        [
            'nama'=>'Pakaian 2',
            'ketegori'=>'Pria',
            'harga'=>100000,
            'image' => 'css/images/big2.jpg'
        ],
        [
            'nama'=>'Pakaian 3',
            'ketegori'=>'Pria',
            'harga'=>75000,
            'image' => 'css/images/big3.jpg'
        ],
        [
            'nama'=>'Pakaian 4',
            'ketegori'=>'Wanita',
            'harga'=>90000,
            'image' => 'css/images/small3.jpg'
        ],
        [
            'nama'=>'Pakaian 5',
            'ketegori'=>'Wanita',
            'harga'=>100000,
            'image' => 'css/images/small4.jpg'
        ]
        ]);
    }
}
