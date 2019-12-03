<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
          ['name' => 'Motherboards'],
          ['name' => 'Procesadores'],
          ['name' => 'Memorias RAM'],
          ['name' => 'Gabinetes'],
          ['name' => 'Placas de video'],
          ['name' => 'Monitores'],
          ['name' => 'Mouses'],
          ['name' => 'Teclados'],
          ['name' => 'Auriculares']








        ]);
    }
}
