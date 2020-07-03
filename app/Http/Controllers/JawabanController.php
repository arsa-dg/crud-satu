<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawaban = JawabanModel::get_all();
        $pertanyaan = PertanyaanModel::get_all();
        $compact = compact("jawaban", "pertanyaan");
        // dd($compact);
        return view("jawaban.index", compact("jawaban", "pertanyaan"));
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]); //array asosiatif key _token biar ga ikut
        $uri = $_SERVER['REQUEST_URI'];
        $basename = (int)basename($uri);
        $data["pertanyaan_id"] = $basename;
        $jawaban = JawabanModel::save($data);
        if($jawaban){
            return redirect("/jawaban/$basename");
        }
    }
}
