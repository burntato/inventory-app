<?php

namespace Database\Seeders;

use App\Models\Item;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Marker',
            'status' => 'available',

        ]);

        Item::create([
            'name' => 'Pencil',
            'status' => 'available',

        ]);
    }
}
