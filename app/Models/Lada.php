<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lada extends Model
{
    use HasFactory;
    protected $table = 'ladas';
    protected $guarded = ['id'];
    //protected $with = ['chip'];

    public function chip()
    {
        return $this->hasMany(Chip::class);
    }
}
