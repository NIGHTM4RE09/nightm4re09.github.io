<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;
    protected $table = 'chips';
    protected $guarded = ['id'];
    //protected $with = ['lada'];

    //Relación Uno a Muchos (Inverso)
    public function lada()
    {
        return $this->belongsTo(Lada::class);
    }

    public function userchip()
    {
        return $this->belongsTo(Userchip::class);
    }
    
}
