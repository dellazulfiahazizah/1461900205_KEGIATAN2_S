<?php

namespace App\Http\Controllers;

use App\Http|Controllers\Controller;

class JadwalControllers\Controller{
    public function show($id)
}
$jadwal = DB::table('')
        ->join('semester', 'jadwal.id_semester', '=', 'semester.id_semester')
        ->select('jadwal.*', 'semester.status')
        ->where('jadwal', '=', 'A')
        ->get()

        return view('jadwal', [
            'jadwal'=> $jadwal
        ]);
        }
    }        