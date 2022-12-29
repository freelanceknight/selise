<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'name' => Str::random(10),
            'author_name' => Str::random(10),
            'price' => rand(100,200),
            'image' => asset('/public/images/book.jpg')
        ]);
    }
}
