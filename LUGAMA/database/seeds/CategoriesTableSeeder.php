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
          ['name' => 'Auriculares'],
          ['name' => 'Gabinetes'],
          ['name' => 'Memorias RAM'],
          ['name' => 'Monitores'],
          ['name' => 'Motherboards'],
          ['name' => 'Mouses'],
          ['name' => 'Placas de video'],
          ['name' => 'Procesadores'],
          ['name' => 'Teclados']
        ]);
    }
}
