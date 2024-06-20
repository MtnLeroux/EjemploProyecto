<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    use HasFactory;
    protected $table = 'especialistas';

    public function especialista(){
        return $this->hasMany('App\Models\Especialista');
    }
}
