<?php

namespace Database\Seeders;

use App\Models\BalanceHistory;
use Illuminate\Database\Seeder;

class BalanceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create()->each(function ($user){
            $count = rand(1, 20);
            $balance = 0;
            BalanceHistory::factory($count)->create()->each(function (BalanceHistory $balanceHistory) use (&$balance, $user){
                $value = rand(-400, 1000);
                $balance += $value;

                $balanceHistory->balance = $balance;
                $balanceHistory->value = $value;
                $balanceHistory->user_id = $user->id;
                $balanceHistory->save();
            });
        });
    }
}
