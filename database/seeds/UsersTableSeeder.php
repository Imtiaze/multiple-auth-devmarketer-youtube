<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        factory(App\User::class, 50)->create();
    }
}
