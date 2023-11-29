<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        //$barang = Barang::all();
        return view('Barang.dataBarang');
    }

    public function create()
    {
        return view('barang.createBarang');
    }

    public function store(Request $request)
    {
        Barang::create([
            'KodeBarang'=> $request->KodeBarang,
            'NamaBarang'=> $request->NamaBarang,
            'Satuan'=> $request->Satuan,
            'HargaSatuan'=> $request->HargaSatuan,
            'Stok'=> $request->Stok,
        ]);

        return redirect('barang.dataBarang');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
        // Sesuaikan 'barang.edit' dengan nama view yang ingin Anda gunakan.
    }

    public function update(Request $request, Barang $barang)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'NamaBarang' => 'required|string',
            'HargaSatuan' => 'required|integer',
            'Stok' => 'required|integer',
        ]);

        // Update data pada tabel Barang
        $barang->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Barang $barang)
    {
        // Hapus data dari tabel Barang
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus.');
    }
}
