<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BalanceHistory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $value
 * @property float $balance
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereValue($value)
 * @mixin \Eloquent
 */
class BalanceHistory extends Model
{
    use HasFactory;
}
