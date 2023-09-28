<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;
use Illuminate\Support\Str;

class TripSeeder extends Seeder
{
    /**
     * Seed the trips data.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'destination' => 'Japan',
            'slug' => Str::slug('Japan Winter'), // Slug for 'Japan'
            'transit' => 'Direct Flight',
            'departure_date' => now()->addMonths(2), // Example departure date (2 months from now)
            'return_date' => now()->addMonths(2)->addDays(7), // Example return date (2 months and 7 days from now)
            'price' => 1200.00, // Example price
            'description' => 'A trip to beautiful Japan!',
            'include' => 'Flight, Accommodation, Guided Tours',
            'exclude' => 'Meals, Personal Expenses',
        ]);
    }
}
