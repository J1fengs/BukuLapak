<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Dunia Cecilia',
                'publisher' => 'Mizan',
                'author' => 'Jostein Gaarder',
                'year' => '2015',
                'price' => '60000',
                'type' => 'Novel',
                'gallery' => 'https://inc.mizanstore.com/aassets/img/com_cart/produk/covUC-53.jpg'
            ],
            [
                'title' => 'Fundamentals of physics Halliday & resnick 9th ninth edition walker',
                'publisher' => '-',
                'author' => 'David Haliday, etc',
                'year' => '2019',
                'price' => '1000000',
                'type' => 'Technology',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/61XNp5uDK7L._SX258_BO1,204,203,200_.jpg'
            ],
            [
                'title' => 'Data Science for Business',
                'publisher' => '-',
                'author' => 'Tom Fawcet',
                'year' => '2013',
                'price' => '1500000',
                'type' => 'Technology',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71sExM98TWL.jpg'
            ],
            [
                'title' => 'Persamaan Differensial',
                'publisher' => '-',
                'author' => 'Siti Saillah',
                'year' => '2019',
                'price' => '61200',
                'type' => 'Technic',
                'gallery' => 'https://www.belbuk.com/images/products/buku/komputer--internet/teknik--ilmu-komputer/5c5d5faba9a641.22714832m.jpg'
            ],
            [
                'title' => 'Matematika Terapan',
                'publisher' => 'Andi',
                'author' => 'Siti Sailah',
                'year' => '2019',
                'price' => '121500',
                'type' => 'Technic',
                'gallery' => 'https://www.belbuk.com/images/products/buku/teknik--ilmu-pengetahuan/matematika--ipa/Matematika-Terapan-5dc11f1c3a551m.jpg'
            ]
        ]);
    }
}
