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
        'door',
        'exhaust_volume',
    ];
    public function brand() {
                return $this->belongsTo('App\Models\Brand','bid','id');
            }
            public function scopeCpvolume($query) {
                return $query->where('price','<=', 100)->orderBy('price','asc');
                    }
                    public function scopeAllOrigins($query) {
                        return $query->select('origin')->groupBy('origin');
                    }
                    public function scopeOrigin($query, $ori) {
                        return $query->where('origin','=', $ori);
                        }
}
