<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ["user_id","naira_balance","dollar_balance","euro_balance","euro_balance","yen_balance","referral_balance","withdrawals","deposits","bitcoin_address","ethereum_address","usdt_address","litecoin_address"];
}
