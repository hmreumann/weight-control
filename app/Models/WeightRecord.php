<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_time',
        'weight_record'
    ];

    public function User() {
        return $this->hasOne(User::class);
    }
}
