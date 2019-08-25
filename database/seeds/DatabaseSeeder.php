<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//MARCAS
        DB::table('brands')->insert([
        	'name'=> 'apple'
        ]);
        DB::table('brands')->insert([
        	'name'=> 'sony'
        ]);
        DB::table('brands')->insert([
        	'name'=> 'xiaomi'
        ]);
        DB::table('brands')->insert([
        	'name'=> 'google'
        ]);
        DB::table('brands')->insert([
          'name'=> 'microsoft'
        ]);
        DB::table('brands')->insert([
          'name'=> 'nikon'
        ]);
        DB::table('brands')->insert([
          'name'=> 'nintendo'
        ]);
        DB::table('brands')->insert([
          'name'=> 'bose'
        ]);
        DB::table('brands')->insert([
          'name'=> 'samsung'
        ]);
        DB::table('brands')->insert([
          'name'=> 'lenovo'
        ]);
        DB::table('brands')->insert([
          'name'=> 'asus'
        ]);
        DB::table('brands')->insert([
          'name'=> 'dji'
        ]);
// CATEGORIAS
        DB::table('categories')->insert([
        	'name'=> 'foto'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'computadoras'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'audio'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'mobile'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'tv'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'accesorios'
        ]);
// PRODUCTOS
  //Fotografia
        DB::table('products')->insert([
          'name'=> 'Nikon D7500 DSLR (solo cuerpo)',
          'price'=> '74995',
          'image'=> '/images/fotosDH/nikon_d7500.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'6',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Nikon D850 DSLR (solo cuerpo)',
          'price'=> '245990',
          'image'=> '/images/fotosDH/nikon_d850.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'6',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'DJI mavic pro 2 + control',
          'price'=> '114230',
          'image'=> '/images/fotosDH/dji_mavic_2_pro.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'12',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Sony Alpha a7R IV Mirrorless',
          'price'=> '209880',
          'image'=> '/images/fotosDH/sony_a7r_iv.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Sony Alpha a6400 Mirrorless',
          'price'=> '59880',
          'image'=> '/images/fotosDH/sony_alpha_a6400.jpg',
          'category_id'=>'1',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
  //Computadoras
        DB::table('products')->insert([
          'name'=> 'Microsoft 28" Surface Studio 2 Multi-Touch All-in-One',
          'price'=> '223500',
          'image'=> '/images/fotosDH/microsoft.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'5',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Microsoft 13.5" Surface Book 2 Multi-Touch 2-in-1',
          'price'=> '125900',
          'image'=> '/images/fotosDH/microsoft-13.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'5',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Macbook Air',
          'price'=> '53940',
          'image'=> '/images/fotosDH/macbookAir.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Lenovo 15.6" IdeaPad 330s Laptop',
          'price'=> '20940',
          'image'=> '/images/fotosDH/lenovo.jpg',
          'category_id'=>'2',
          'stock'=>'10',
          'brand_id'=>'10',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
  //Audio
        DB::table('products')->insert([
          'name'=> 'Apple HomePod',
          'price'=> '17940',
          'image'=> '/images/fotosDH/applepod.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Ultimate ears Wonderboom',
          'price'=> '6800',
          'image'=> '/images/fotosDH/wonderboom.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'description'=>'Lorem ipsum dolor sit amet'
          ,
        ]);
        DB::table('products')->insert([
          'name'=> 'Bose SoundLink Micro Bluetooth',
          'price'=> '4800',
          'image'=> '/images/fotosDH/bose_negro.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'8',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Bose SoundLink Revolve',
          'price'=> '17900',
          'image'=> '/images/fotosDH/bose-revolve.jpg',
          'category_id'=>'3',
          'stock'=>'10',
          'brand_id'=>'8',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
  //Mobile
        DB::table('products')->insert([
        	'name'=> 'Google Pixel 3a',
          'price'=> '24000',
          'image'=> '/images/fotosDH/google_pixel_3.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'4',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Samsung Galaxy S10',
          'price'=> '56000',
          'image'=> '/images/fotosDH/samsung10.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Xiaomi Mi 9 Dual-SIM',
          'price'=> '26800',
          'image'=> '/images/fotosDH/xiaomi.jpg',
          'category_id'=>'4',
          'stock'=>'10',
          'brand_id'=>'3',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
  //TV & Entretenimiento
        DB::table('products')->insert([
        	'name'=> 'Sony X950G 55" Class HDR 4K UHD Smart LED TV',
          'price'=> '65880',
          'image'=> '/images/fotosDH/sonyTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'2',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Samsung RU7100 65" Class HDR 4K UHD Smart LED TV',
          'price'=> '41880',
          'image'=> '/images/fotosDH/samsungTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Nintendo Switch + controles en azul y rojo',
          'price'=> '17940',
          'image'=> '/images/fotosDH/nintendo_switch.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'7',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Google Chromecast Ultra (Black)',
          'price'=> '3600',
          'image'=> '/images/fotosDH/chromecast.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'4',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Apple TV 4K (64GB)',
          'price'=> '11500',
          'image'=> '/images/fotosDH/appleTV.jpg',
          'category_id'=>'5',
          'stock'=>'10',
          'brand_id'=>'1',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
  //Accesorios
        DB::table('products')->insert([
        	'name'=> 'Funda para Samsung Galaxy S10',
          'price'=> '1000',
          'image'=> '/images/fotosDH/caseSamsung.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'9',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
        	'name'=> 'Soporte para el auto',
          'price'=> '750',
          'image'=> '/images/fotosDH/soporteAuto.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'3',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);
        DB::table('products')->insert([
          'name'=> 'Nintendo Joy (con controles)',
          'price'=> '4200',
          'image'=> '/images/fotosDH/controlesNintendo.jpg',
          'category_id'=>'6',
          'stock'=>'10',
          'brand_id'=>'7',
          'description'=>'Lorem ipsum dolor sit amet'

        ]);


        // $this->call(UsersTableSeeder::class);
        // factory(App\Product::class)->times(50)->create();


    }
}
