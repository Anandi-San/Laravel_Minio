<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        try {
        $file = $request->file('file');

// Mendapatkan nama file asli
        $fileName = $file->getClientOriginalName();

// Menyimpan file ke disk MinIO
        Storage::disk('minio')->put($fileName, file_get_contents($file), 'public');


        return response("upload berhasil");
        } catch (\Throwable $th) {
            return $th;
        }
        
    }
}
