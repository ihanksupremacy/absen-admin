<?php

namespace App\Exports;

use App\Models\Absensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AbsensiExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Absensi::select('absensi.id as absensi_id', 'absensi.waktu_absen', 'absensi.user_id', 'absensi.status_absen', 'user.nama as user_nama')
                      ->join('user', 'absensi.user_id', '=', 'user.id')
                      ->orderBy('user.nama') // Mengurutkan berdasarkan nama user
                      ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Waktu Absen',
            'Nama User',
            'Status Absen',
        ];
    }

    public function map($absensi): array
    {
        return [
            $absensi->absensi_id, // Menggunakan alias absensi_id
            $absensi->waktu_absen,
            $absensi->user_nama, // Menggunakan alias user_nama
            $absensi->status_absen,
        ];
    }
}
