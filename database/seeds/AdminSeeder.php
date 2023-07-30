<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Admins;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data for data column
        $data = [
            'name' => 'Test Bhavin',
            'mobile' => '1234567890'
        ];

        // create payload to insert data in admins table
        $payload = [
            'data' => json_encode($data),
            'email' => 'test@gmail.com',
            'password' => Hash::make('test@gmail.com'),
        ];

        Admins::insert($payload);
        // DB::table('admins')->insert($payload);
    }
}
