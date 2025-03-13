<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index() {
        $publications = Publication::latest()->get();
        return view('menutujuh', compact('publications'));
    }
}
