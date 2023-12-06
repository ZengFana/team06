<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * var array<int, string>
     */
    protected $fillable = [
        'car_sample',
        'bid',
        'car_modle',
        'type',
        'power_type',
        'price',
        'origin',
        'exhaust_volume',
    ];
    public function brand() {
    return $this->belongsTo('App\Models\Brand','bid','id');
    }
}
