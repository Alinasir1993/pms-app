<?php

namespace Database\Seeders;
use App\Models\BusinessType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        BusinessType::query()->truncate();
        $items = [
            [
                'id' => 1,
                'name' => 'E-COMMERENCE',
                'created_at' => now(),
            ],

            [
                'id' => 2,
                'name' => 'POS',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'CRM',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'HRMS',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'OTHER',
                'created_at' => now(),
            ],
        ];

        foreach ($items as $item) {
            BusinessType::updateOrCreate(['id' => $item['id']], $item);
        }

        Schema::enableForeignKeyConstraints();
    }
}
