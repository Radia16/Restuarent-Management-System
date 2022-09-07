<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Transfer;
use App\Models\TransferItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $transfer_table    =  Transfer::create([
        //     'date'           => now()->format('Y-m-d'),
        //     'to_outlet_id'   => 2,
        //     'status'         => 'draft',
        //      'transfer_type' => "ingredient"
        // ]);

        $food = Food::find(6);
        $food->transfer_items()->create([
            'type'  => 'food',
            'transfer_id'=>1,
        ]);

    }
}
