<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growth extends Model
{
    protected $table = 'growths';
    use HasFactory;
    public function exps()
    {
        return $this->hasMany('App\Models\Exp');
    }
}
