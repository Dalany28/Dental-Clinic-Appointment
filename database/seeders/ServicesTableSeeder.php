<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $services = [
            'Dental Checkup',
            'Teeth Cleaning',
            'Tooth Extraction',
            'Invisalign Braces',
            'Root Canal Therapy',
            'Dental Implants',
            'Dental Crowns and Bridges',
            'Teeth Whitening',
            'Orthodontic Treatment',
            'Periodontal Treatment',
            'Oral Surgery',
        ];

        foreach ($services as $service) {
            Service::create(['name' => $service]);
        }
    }
}