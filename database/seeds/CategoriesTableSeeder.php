<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Lợn',

                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',

                'description' => 'Bán lợn'
            ],
            [
                'id' => 2,
                'name' => 'LápTop',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'description' => 'Bán laptop'
            ],
            [
                'id' => 3,
                'name' => 'Iphone',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'description' => 'Bán Iphone'
            ],
            [
                'id' => 4,
                'name' => 'Ipad',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'description' => 'Bán Ipad'
            ],
            [
                'id' => 5,
                'name' => 'Bánh',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTsQfhRqUmkOF5AGp-Gu51RdGKUQ-OhcZgJyP6AWIf9CN3jzPO',
                'description' => 'Bán bánh'
            ],
        ]);
    }
}
