<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        // $this->call([
        //     PostTableSeeder::class,
        // ]);
        $faker = Faker::create();
        // foreach(range(1,100) as $index){
        //     DB::table('users')->insert([
        //         'name'=>$faker->name,
        //         'email'=>$faker->email,
        //         'password'=>bcrypt('secret')
        //     ]);
        // }
        foreach(range(1,100) as $index){
            DB::table('students')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber
            ]);
        }
    }
}
