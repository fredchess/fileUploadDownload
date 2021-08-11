<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FichierController extends Controller
{
    public function list()
    {

        $files = DB::table('fichiers')->get();
        return view('fichiers.list', ['files' => $files]);
    }

    public function add()
    {
        return view('fichiers.add');
    }

    public function details($id)
    {
        // $file = DB::table('fichiers')->find($id);
        $file = Fichier::findOrFail($id);

        return view('fichiers.details', ['file' => $file]);
    }
}
