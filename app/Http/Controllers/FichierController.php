<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\FilesystemAdapter;

class FichierController extends Controller
{
    public function list()
    {

        $files = Fichier::all()->sortDesc();
        return view('fichiers.list', ['files' => $files]);
    }

    public function add()
    {
        return view('fichiers.add');
    }

    public function store(Request $request)
    {
        $associatedImagePath = null;
        if ($request->file('associatedImage') != null){
            $associatedImageName = date('dmyHis').'.'.$request->file('associatedImage')->extension();
            $associatedImagePath = $request->file('associatedImage')->storeAs(
                'Uploads/images',
                $associatedImageName,
                'public'
            );
        }

        $fileName = preg_replace('/[\W]/', '_', $request->input('name')).'_'.'.'.$request->file('fileName')->extension();
        $filePath = $request->file('fileName')->storeAs(
            'Uploads',
            $fileName,
            'public'
        );

        $file = Fichier::Create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'associatedImagePath' => $associatedImagePath,
            'path' => $filePath,
            'size' => $request->file('fileName')->getSize() / 1024
        ]);

        return view('fichiers.details', ['file' => $file]);
    }

    public function details($id)
    {
        $file = Fichier::findOrFail($id);

        return view('fichiers.details', ['file' => $file]);
    }

    public function download($id)
    {
        $file = Fichier::findOrFail($id);

        return view('fichiers.download', ['file' => $file]);
    }

    public function downloadFile($id)
    {
        $file = Fichier::findOrFail($id);

        // $file->downloads++;
        DB::update('update fichiers set downloads = downloads + 1 where id = '.$id );

        return Storage::download('public/'.$file->path);
    }
}
