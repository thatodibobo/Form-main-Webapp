<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'SAPS',],
            ['id' => 3, 'title' => 'Citizenz',],

        ];

        foreach($items as $item){
            Role::create($item);
        }
    }
}
