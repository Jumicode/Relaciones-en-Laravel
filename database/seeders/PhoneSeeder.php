<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Phone::create([
        'prefix' => 58,
        'phone_number' => 12345,
        'user_id' => 1,



      ]);

      Phone::create([
        'prefix' => 57,
        'phone_number' => 55555,
        'user_id' => 1,
      ]);
    }
}
