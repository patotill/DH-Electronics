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
        DB::table('brands')->insert([
        	'name'=> 'hp'
        ]);
        DB::table('brands')->insert([
        	'name'=> 'sony'
        ]);

        DB::table('categories')->insert([
        	'name'=> 'impresoras'
        ]);
        DB::table('categories')->insert([
        	'name'=> 'tv'
        ]);

        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class)->times(50)->create();


    }
}
