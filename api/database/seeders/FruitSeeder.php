<?php

namespace Database\Seeders;

use App\Models\Fruit;    // fruit should be imported here in this statement. after calling it down here in public function.
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fruit :: factory()->count(50)->create();
    }
}
