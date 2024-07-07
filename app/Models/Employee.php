<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nomor_induk',
        'nama_karyawan',
        'no_ktp',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telepon',
        'jenis_kelamin',
        'agama',
        'status_pernikahan',
        'jenjang_pendidikan',
        'tahun_lulus',
        'tahun_bergabung',
        'lama_bekerja',
        'status_karyawan',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
