<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SaleItem;
use App\Models\User;

class Sale extends Model
{
    protected $fillable = ['branch_id', 'user_id', 'total_amount','profit_amount', 'payment_method'];
    //
    public function items() {
        return $this->hasMany(SaleItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
