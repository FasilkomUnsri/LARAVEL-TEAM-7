<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','jenis_kelamin','tempat_kelahiran','tanggal_lahir','alamat','jabatan','gambar'
    ];
}