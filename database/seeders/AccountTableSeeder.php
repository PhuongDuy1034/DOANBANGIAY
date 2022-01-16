<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use Faker\Factory as Faker;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Account::create([
            'username' => 'VPDuy',
            'email' => 'Pduy@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '0327678818',
            'address' => '45 Nguyễn Huệ',
            'fullname' => 'Võ Phương Duy',
            'isadmin' => '1',
            'avatar' => 'Pduy',
            'status' => '1',
            ]);
    }
}
