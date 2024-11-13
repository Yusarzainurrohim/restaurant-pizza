<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash facade
use Illuminate\Support\Str;

class SystemController extends Controller
{
    public function admin()
    {
        // Ambil nama dari session
        $name = session('name');
        return view('admin.admin', compact('name')); // Mengirim variabel name ke view
    }

    public function cashier()
    {
        $name = session('name');
        return view('cashier.cashier', compact('name')); // Mengirim variabel name ke view
    }

    public function owner()
    {
        $name = session('name');
        return view('owner.owner', compact('name')); // Mengirim variabel name ke view
    }

    public function users()
    {
        // Ambil nama pengguna yang sedang login dari session
        $name = session('name');

        // Mengambil data user berdasarkan role untuk ditampilkan di view
        $admins = Login::where('role', 'admin')->get();
        $cashiers = Login::where('role', 'cashier')->get();
        $owners = Login::where('role', 'owner')->get(); // Menampilkan data owners jika diperlukan

        // Menghitung jumlah user berdasarkan role
        $totalCashiers = $cashiers->count();
        $totalAdmins = $admins->count();
        $totalOwners = $owners->count();

        // Mengirimkan data ke view menggunakan compact
        return view('admin.users', compact('admins', 'cashiers', 'owners', 'totalCashiers', 'totalAdmins', 'totalOwners', 'name'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:user', // Validasi username unik pada tabel 'user'
            'nama' => 'required|string|max:255',        // Menggunakan 'nama' untuk mencocokkan dengan nama kolom di database
            'role' => 'required|string|in:admin,cashier,owner',
        ]);

        // Generate password acak 8 karakter
        $password = Str::random(8);

        // Simpan pengguna baru ke dalam tabel 'user'
        $user = new Login();
        $user->username = $request->username;
        $user->password = Hash::make($password); // Hash password sebelum disimpan
        $user->nama = $request->nama;            // Menggunakan 'nama' sesuai dengan kolom di database
        $user->role = $request->role;
        $user->save();

        // Berikan notifikasi atau flash message untuk menampilkan password yang di-generate
        return redirect()->back()->with('success', "User created successfully. The generated password is: $password");
    }

    public function destroy($id)
    {
        $user = Login::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'User tidak ditemukan.');
    }
}
