<?php

namespace Database\Seeders;

use App\Models\District;
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
        $data = [
            [1, 'Comilla'],
            [1, 'Feni'],
            [1, 'Brahmanbaria'],
            [1, 'Rangamati'],
            [1, 'Noakhali'],
            [1, 'Chandpur'],
            [1, 'Lakshmipur'],
            [1, 'Chattogram'],
            [1, 'Coxsbazar'],
            [1, 'Khagrachhari'],
            [1, 'Bandarban'],
            [2, 'Sirajganj'],
            [2, 'Pabna'],
            [2, 'Bogura'],
            [2, 'Rajshahi'],
            [2, 'Natore'],
            [2, 'Joypurhat'],
            [2, 'Chapainawabganj'],
            [2, 'Naogaon'],
            [3, 'Jashore'],
            [3, 'Satkhira'],
            [3, 'Meherpur'],
            [3, 'Narail'],
            [3, 'Chuadanga'],
            [3, 'Kushtia'],
            [3, 'Magura'],
            [3, 'Khulna'],
            [3, 'Bagerhat'],
            [3, 'Jhenaidah'],
            [4, 'Jhalakathi'],
            [4, 'Patuakhali'],
            [4, 'Pirojpur'],
            [4, 'Barisal'],
            [4, 'Bhola'],
            [4, 'Barguna'],
            [5, 'Sylhet'],
            [5, 'Moulvibazar'],
            [5, 'Habiganj'],
            [5, 'Sunamganj'],
            [6, 'Narsingdi'],
            [6, 'Gazipur'],
            [6, 'Shariatpur'],
            [6, 'Narayanganj'],
            [6, 'Tangail'],
            [6, 'Kishoreganj'],
            [6, 'Manikganj'],
            [6, 'Dhaka'],
            [6, 'Munshiganj'],
            [6, 'Rajbari'],
            [6, 'Madaripur'],
            [6, 'Gopalganj'],
            [6, 'Faridpur'],
            [7, 'Panchagarh'],
            [7, 'Dinajpur'],
            [7, 'Lalmonirhat'],
            [7, 'Nilphamari'],
            [7, 'Gaibandha'],
            [7, 'Thakurgaon'],
            [7, 'Rangpur'],
            [7, 'Kurigram'],
            [8, 'Sherpur'],
            [8, 'Mymensingh'],
            [8, 'Jamalpur'],
            [8, 'Netrokona'],
        ];
        foreach ($data as $district) {
            District::create(['division_id' => $district[0], 'name' => $district[1]]);
        }

    }
}