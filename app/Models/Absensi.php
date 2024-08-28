<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    // Dalam model Absensi.php
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    protected $fillable = [
        'photo_absen',
        'waktu_absen',
        'user_id',
        'status_absen',
    ];

    // Mengatur waktu untuk disertakan dalam format yang benar
    protected $casts = [
        'waktu_absen' => 'datetime',
    ];
    public $timestamps = false;

    // Mengatur atribut `photo_absen` agar bisa diakses sebagai base64
    protected $appends = ['photo_absen_base64'];

    public function getPhotoAbsenBase64Attribute()
    {
        return base64_encode($this->photo_absen);
    }
}
