<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Admin::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        factory(App\Admin::class, 5)->create();
    }
}
