<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Company;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->delete();

        $contacts = [];
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            $contacts[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'address' => $faker->address,
                'company_id' => Company::pluck('id')->random(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}
