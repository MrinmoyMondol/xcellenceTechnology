<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Dashboard\Entities\Testimonial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Support::factory(20)->create();
//         Testimonial::factory(10)->create();
    }
}
