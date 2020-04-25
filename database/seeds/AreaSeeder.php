<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                [ 'name' => 'Androrkilla', 'type' => 'ward', 'district_id' => '5', ],

                [ 'name' => 'Jamalkhan', 'type' => 'ward', 'district_id' => '5',],

                [ 'name' => 'Kotowali', 'type' => 'thana', 'district_id' => '5',],

            ]
        );
    }
}
