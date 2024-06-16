<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SettingsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ProcessesTableSeeder::class);
    }
}
