<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('inventario.index',compact('items'));
    }
}
