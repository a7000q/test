<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use App\Http\Repository\BalanceHistoryRepository;
use App\Http\Requests\UserBalanceRequest;
use Illuminate\Http\Request;
use Sajya\Server\Procedure;

class BalanceProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name = 'balance';

    public static $user_id;

    /**
     * Execute the procedure.
     *
     * @param UserBalanceRequest $request
     * @param BalanceHistoryRepository $balanceHistoryRepository
     * @return array|string|integer
     */
    public function userBalance(UserBalanceRequest $request, BalanceHistoryRepository $balanceHistoryRepository)
    {
        static::$user_id = $request->input('user_id');
        return $balanceHistoryRepository->getBalanceById(static::$user_id);
    }

    /**
     * Execute the procedure.
     *
     * @param Request $request
     * @param BalanceHistoryRepository $balanceHistoryRepository
     * @return array|string|integer
     */
    public function history(Request $request, BalanceHistoryRepository $balanceHistoryRepository)
    {
        $request->validate([
            'limit' => 'integer'
        ]);

        return $balanceHistoryRepository->getHistoryById(static::$user_id, $request->input('limit'));
    }
}
