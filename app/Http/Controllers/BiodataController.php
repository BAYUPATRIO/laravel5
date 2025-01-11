<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbData;

class BiodataController extends Controller
{
    public function edit($id)
    {
        $data = DbData::findOrFail($id);
        return view('biodataUTS_edit', compact('data'));
    }
    public function delete($id)
    {
        $data = DbData::findOrFail($id);
        $data->delete();

        return redirect('/biodataUTS')->with('success', 'Data berhasil dihapus!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        $data = DbData::findOrFail($id);
        $data->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'nilai' => $request->nilai,
        ]);

        return redirect('/biodataUTS')->with('success', 'Data berhasil diperbarui!');
    }
    
    public function biodataUTS()
    {
        // Ambil semua data dari tabel db_data
        $data = DbData::all();

        // Kirim data ke view
        return view('biodataUTS', ['data' => $data]);
    }

    public function biodataUTSAction(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        DbData::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'nilai' => $request->nilai,
        ]);

        return back()->with('success', 'Data berhasil disimpan ke database!');
    }
}

