<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel; 

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

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::get_all();
        $compact = compact("pertanyaan", "jawaban");
        return view("pertanyaan.show", $compact);
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view("pertanyaan.edit", compact("pertanyaan"));
    }

    public function update($id, Request $request){
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect("/pertanyaan");
    }

    public function destroy($id){
        $deletedPertanyaan = PertanyaanModel::destroy($id);
        $deletedJawaban = JawabanModel::destroy($id);
        return redirect("/pertanyaan");
    }
}
