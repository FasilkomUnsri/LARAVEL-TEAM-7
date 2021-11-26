<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::latest()->paginate(10);
        return view('perusahaan.index',compact('perusahaans'));
    }

    public function create()
    {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'jenis_kelamin'     => 'required',
            'tempat_kelahiran'     => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'   => 'required',
            'jabatan'   => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/perusahaans', $gambar->hashName());

        $perusahaan = Perusahaan::create([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tempat_kelahiran'     =>$request->tempat_kelahiran,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'   => $request->alamat,
            'jabatan'   => $request->jabatan
        ]);

        if($perusahaan){
            return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('perusahaan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, Perusahaan $perusahaan)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'jenis_kelamin'     => 'required',
            'tempat_kelahiran'     => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'   => 'required',
            'jabatan'   => 'required'
        ]);

        $perusahaan = Perusahaan::findOrFail($perusahaan->id);

        if($request->file('gambar') == "") {

            $perusahaan->update([
            'nama'     => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tempat_kelahiran'     =>$request->tempat_kelahiran,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'   => $request->alamat,
            'jabatan'   => $request->jabatan
            ]);

        } else {

            Storage::disk('local')->delete('public/perusahaans/'.$perusahaan->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/perusahaans', $gambar->hashName());

            $perusahaan->update([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tempat_kelahiran'     =>$request->tempat_kelahiran,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'   => $request->alamat,
            'jabatan'   => $request->jabatan
            ]);

        }

        if($perusahaan){
            return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('perusahaan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        Storage::disk('local')->delete('public/perusahaans/'.$perusahaan->gambar);
        $perusahaan->delete();

        if($perusahaan){
            return redirect()->route('perusahaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('perusahaan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
