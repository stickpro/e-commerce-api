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
        // $this->call(UserSeeder::class);
        //factory(App\Models\Category::class,5)->create();
        factory(App\Models\Product::class,5)->create();
    }
}
