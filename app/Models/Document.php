<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi Laravel, tambahkan properti ini
    protected $table = 'documents';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['file_name', 'file_path', 'uploaded_at'];
}
