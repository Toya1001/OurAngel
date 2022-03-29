<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'trn',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
