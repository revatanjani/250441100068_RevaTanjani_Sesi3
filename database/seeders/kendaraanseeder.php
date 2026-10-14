<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kendaraanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kendaraan::factory()->create();
    }
}