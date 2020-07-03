<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function index(){
        $items = ItemModel::get_all();
        return view("item.index", compact("items"));
    }

    public function create(){
        return view("item.form");
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]); //array asosiatif key _token biar ga ikut
        $item = ItemModel::save($data);
        if($item){
            // return redirect("/items");
            $items = ItemModel::get_all();
            return view("item.index", compact("items"));
        }
    }
}
