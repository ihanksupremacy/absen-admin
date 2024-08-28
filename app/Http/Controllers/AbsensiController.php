<?php
namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\User;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index($userId)
    {
        $absensiList = Absensi::where('user_id', $userId)->get();
        $user = User::find($userId); // Ambil data pengguna berdasarkan userId
        return view('absensi.index', [
            'absensiList' => $absensiList, 
            'userId' => $userId,
            'userName' => $user ? $user->nama : 'Unknown' // Kirimkan nama pengguna ke view
        ]);
    }
    

    public function create($userId)

    {
        $user = User::find($userId);
        return view('absensi.create', ['userId' => $userId, 'userName' => $user ? $user->nama : 'Unknown']);
    }
    public function show($id)
    {
        $absensi = Absensi::find($id);

        if (!$absensi) {
            return redirect()->route('users.index')->with('error', 'Absensi tidak ditemukan.');
        }

        return view('absensi.show', compact('absensi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'waktu_absen' => 'required|date',
            'status_absen' => 'required|string',
            'photo_absen' => 'nullable|string', // Bisa berupa base64
        ]);

        Absensi::create([
            'waktu_absen' => $request->waktu_absen,
            'status_absen' => $request->status_absen,
            'photo_absen' => $request->photo_absen,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('absensi.index', ['userId' => $request->user_id])->with('success', 'Absensi berhasil ditambahkan!');
    }
}
