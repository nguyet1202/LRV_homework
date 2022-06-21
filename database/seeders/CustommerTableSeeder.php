<?php

namespace Database\Seeders;
// use App\Models\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustommerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('customer')->insert(
    //         [
    //             [
    //                 'Name'=>"Lan A",
    //                 'Sdt'=>"0935492113",
    //                 'Address'=>"101 B Le Hưu Trác ",
    //             ]  ,  
    //             [
                    
    //                 'Name'=>"Nguyet",
    //                 'Sdt'=>"0935492113",
    //                 'Address'=>"101 B Le Hưu Trác ",
    //             ]  
    //         ]);
    
    // }
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('customer')->insert([
                'Name' => $faker->Name,
                'Sdt' => $faker->phoneNumber,
                'Address' => $faker->Address,
            ]);
        }
    }
}
