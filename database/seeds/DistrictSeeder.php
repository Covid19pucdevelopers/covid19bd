<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('districts')->insert(
            [
                [ 'name' => 'Dhaka', 'division_id' => '1',],

                ['name' => 'Gazipur', 'division_id' => '1',],

                ['name' => 'Kishoreganj', 'division_id' => '1',],

                ['name' => 'Manikganj', 'division_id' => '1',],



                ['name' => 'Chittagong', 'division_id' => '2', ],

                ['name' => "Cox's Bazar", 'division_id' => '2',],

                ['name' => 'Bandarban', 'division_id' => '2',],

                ['name' => 'Rangamati', 'division_id' => '2',],



                ['name' => 'Barisal', 'division_id' => '3',],

                ['name' => 'Barguna', 'division_id' => '3',],

                ['name' => 'Bhola', 'division_id' => '3',],

                ['name' => 'Jhalokati', 'division_id' => '3',],



                ['name' => 'Khulna', 'division_id' => '4',],

                ['name' => 'Bagerhat', 'division_id' => '4',],

                ['name' => 'Chuadanga', 'division_id' => '4',],

                ['name' => 'Jessore', 'division_id' => '4',],



                ['name' => 'Mymensingh', 'division_id' => '5',],

                ['name' => 'Netrokona', 'division_id' => '5',],

                ['name' => 'Jamalpur', 'division_id' => '5',],

                ['name' => 'Sherpur', 'division_id' => '5',],



                ['name' => 'Rajshahi', 'division_id' => '6',],

                ['name' => 'Bogura', 'division_id' => '6',],

                ['name' => 'Chapainawabganj', 'division_id' => '6',],

                ['name' => 'Joypurhat', 'division_id' => '6',],



                ['name' => 'Rangpur', 'division_id' => '7',],

                ['name' => 'Kurigram', 'division_id' => '7',],

                ['name' => 'Lalmonirhat', 'division_id' => '7',],

                ['name' => 'Nilphamari', 'division_id' => '7',],



                ['name' => 'Sylhet', 'division_id' => '8',],

                ['name' => 'Sunamganj', 'division_id' => '8',],

                ['name' => 'Moulvibazar', 'division_id' => '8',],

                ['name' => 'Habiganj', 'division_id' => '8',],

            ]
        );
    }
}
