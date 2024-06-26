<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'items';

    public function item(){
        return $this->hasMany('App\Models\Item');
    }
}
