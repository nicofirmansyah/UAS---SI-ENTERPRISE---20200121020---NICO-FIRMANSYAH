<?php

namespace App\Http\Controllers\API\dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontrak_Mahasiswa;

class KontrakMahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Kontrak_Mahasiswa::all());
    }
}
