<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

      /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = ["btc_address","ethereum_address","btc_cash_address","litcoin_address"];
}
