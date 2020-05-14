<?php

use Illuminate\Database\Seeder;
use App\StationSolutionRegistration;
class StationSolutionRegistrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $value = new StationSolutionRegistration;
    $value->name = "abc";
    $value->email_id = "abc@gmail.com";
    $value->password = "123";
    $value->phone_no = "886";
    $value->address = "abc tt";
    $value->save();
    }
}
