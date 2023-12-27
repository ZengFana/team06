<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brands',
        'headquarter',
        'area',
        'year',
        'html',
    ];
    public function types(){
        return $this->hasMany('App\Models\type','bid');
    }
    public function delete()
    {
        $this->types()->delete();
        return parent::delete();
    }
    public function scopeYearold($query) {
        return $query->where('year','<=', 1950)->orderBy('year','asc');
    }
    public function scopeYeyear($query) {
        return $query->where('year','>', 1950)->orderBy('year','asc');
    }
}   

