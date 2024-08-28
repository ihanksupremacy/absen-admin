<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $totalUsers = $users->count();
        return view('users', compact('users', 'totalUsers'));
    }

    public function hapus($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
        } else {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan');
        }
    }
}
