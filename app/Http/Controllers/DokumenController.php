<?php

namespace App\Http\Controllers;


use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index(Request $request) {
        $kategori = strtolower($request->input('kategori', 'peraturan'));

        if ($kategori === 'buku') {
            $kategori = 'buku_jurnal';
        }

        $dokumen = Dokumen::where('kategori', $kategori)->paginate(10);

        return view('menuenam', compact('dokumen', 'kategori'));
    }

}
