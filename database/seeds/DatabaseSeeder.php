<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\City;
use App\Partner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        City::create(['name' => 'Rabat'])->partner()->save(App\Partner::create(['name'=>'Mohamed']));
        City::create(['name' => 'Rabat'])->partner()->save(App\Partner::create(['name'=>'Hassan']));
        City::create(['name' => 'Rabat'])->partner()->save(App\Partner::create(['name'=>'Nada']));






    }
}
