<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(app\Todo::class, 10)-> create();
        \app\Models\Todo::factory()->count(10)->create();
          
    }
}
