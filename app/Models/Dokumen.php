<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';
    protected $fillable = ['nama_dokumen', 'tahun', 'penerbit', 'kategori', 'file_path'];

    public function isDownloadable() {
        return !is_null($this->file_path);
    }
}
