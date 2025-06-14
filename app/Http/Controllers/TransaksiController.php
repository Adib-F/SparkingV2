<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pengguna' => 'required|exists:pengguna,id_pengguna',
            'zona_id' => 'required|exists:zona,id',
            'status_transaksi' => 'required|in:aktif,selesai,gagal',
        ]);

        Transaksi::create($validated);

        return response()->json(['message' => 'Transaction recorded successfully'], 201);
    }
}
