<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::query()->truncate();
        $items = [
            [
                'id' => 1,
                'name' => 'super admin',
                'created_at' => now(),
            ],

            [
                'id' => 2,
                'name' => 'admin',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'product manager',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'team lead',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'employee',
                'created_at' => now(),
            ],
        ];

        foreach ($items as $item) {
            Role::updateOrCreate(['id' => $item['id']], $item);
        }

        Schema::enableForeignKeyConstraints();
    }
}
