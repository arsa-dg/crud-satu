<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        $compactpertanyaan = compact("pertanyaan");
        return view("pertanyaan.index", $compactpertanyaan);
    }

    public function create(){
        return view("pertanyaan.form");
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]); //array asosiatif key _token biar ga ikut
        $pertanyaansave = PertanyaanModel::save($data);
        if($pertanyaansave){
            return redirect("/pertanyaan");
        }
    }
}
