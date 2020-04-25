<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert(
            [
                [ 'name' => 'Dhaka'],

                ['name' => 'Chittagong'],

                [ 'name' => 'Barisal'],

                ['name' => 'Khulna'],

                ['name' => 'Mymensingh'],

                ['name' => 'Rajshahi'],

                ['name' => 'Rangpur'],
                
                ['name' => 'Sylhet']
            ]
        );
    }
}
