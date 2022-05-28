<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
class Contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'phone_number'=>'+99365097512',
            'email'=>'polat@gmail.com',
            'address'=>'Ashgabat, Turkmenistan',

        ]);
    }
}
