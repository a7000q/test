<?php


namespace App\Http\Repository;


use App\Models\BalanceHistory;

class BalanceHistoryRepository
{
    public function getBalanceById($id){
        $balanceHistory = BalanceHistory::query()->where('user_id', "=", $id)
            ->orderBy('id', 'DESC')
            ->firstOrFail();

        return $balanceHistory->balance;
    }

    public function getHistoryById($id, $limit = 10){
        $history = BalanceHistory::query()->where('user_id', "=", $id)
            ->orderBy('id', "DESC")
            ->limit($limit)
            ->get();

        return $history;
    }
}
