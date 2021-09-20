<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan make:seeder PostTableSeeder
     * @return void
     * composer dump-autoload
     * php artisan db:seed
     * php artisan migrate:fresh --seed
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('message')->insert([
                'title'=>$faker->sentence(5),
                'body'=>$faker->paragraph(4)
            ]);
        }

    }
}
