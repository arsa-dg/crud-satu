<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all(){
        $jawaban = DB::table("jawaban")->get();
        return $jawaban;
    }

    public static function save($data){
        $new_jawaban = DB::table("jawaban")->insert($data);
        return $new_jawaban;
    }
    
    public static function destroy($id){
        $deleted = DB::table("jawaban")
                        ->where("pertanyaan_id", $id)
                        ->delete();
        return $deleted;
    }
}