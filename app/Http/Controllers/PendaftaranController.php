<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Sekbid;

class PendaftaranController extends Controller
{
    /**
     * Tampilkan halaman pendaftaran
     */
    public function index()
    {
        $sekbids = Sekbid::all();

        return view('osis.pendaftaran', compact('sekbids'));
    }

    /**
     * Simpan data pendaftaran
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nis' => 'required|unique:pendaftarans,nis',
            'kelas' => 'required',
            'no_hp' => 'required'
        ]);

        Pendaftaran::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'no_hp' => $request->no_hp,
            'sekbid_id' => null,
        ]);

        $request->session()->put([
            'pendaftaran_nama' => $request->nama_lengkap,
            'pendaftaran_kelas' => $request->kelas,
        ]);

        return redirect()->route('osis.pilih_bidang')
                ->with('success', 'Pendaftaran berhasil');
    }
}