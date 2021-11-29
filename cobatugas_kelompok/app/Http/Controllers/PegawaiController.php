<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::latest()->paginate(10);
        return view('pegawai.index',compact('pegawais'));
    }
    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'jabatan'   => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/pegawais', $gambar->hashName());

        $pegawai = Pegawai::create([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'jabatan'   => $request->jabatan
        ]);

        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'jabatan'   => 'required'
        ]);

        $pegawai = Pegawai::findOrFail($pegawai->id);

        if($request->file('gambar') == "") {

            $pegawai->update([
            'nama'     => $request->nama,
            'jabatan'   => $request->jabatan
            ]);

        } else {

            Storage::disk('local')->delete('public/pegawais/'.$pegawai->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/pegawais', $gambar->hashName());

            $pegawai->update([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'jabatan'   => $request->jabatan
            ]);

        }

        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }


    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        Storage::disk('local')->delete('public/pegawais/'.$pegawai->gambar);
        $pegawai->delete();

        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
