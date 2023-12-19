<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DokterController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.dokter.upload-form');
    }

    public function upload(Request $request)
    {
        // Menggunakan Http Client untuk mengakses API Flask
        $response = Http::post('http://127.0.0.1:5000/api/dokter/upload', $request->all());


        // Mendapatkan data respons JSON
        $data = $response->json();

        dd($data);
        // Kirim data ke view
        return view('admin.dokter.result')->with($data);
    }

    public function index()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Dokter $dokter)
    {
        //
    }


    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    public function destroy(Dokter $dokter)
    {
        //
    }
}
