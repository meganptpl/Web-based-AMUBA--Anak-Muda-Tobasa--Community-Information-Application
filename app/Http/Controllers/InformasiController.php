<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:product-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersId=Auth::user()->id;
        $informasi = informasi::latest()->paginate(8);
        return view('informasi.index',compact('informasi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate(
            [
                'judul' => 'required|max:8000',
                'tempat' => 'required',
                'gambar' => 'required',
                'deskripsi' => 'required',
            ]);
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';

            $file->move($tujuanFile, $namaFile);

            $newinformasi = new informasi;
            $newinformasi->gambar = $namaFile;
            $newinformasi->judul = $request->judul;
            $newinformasi->tempat = $request->tempat;
            $newinformasi->tanggal = $request->tanggal;
            $newinformasi->deskripsi = $request->deskripsi;
            $newinformasi->user_id = Auth::user()->id;
            $newinformasi->save();

            return redirect()->route('informasi.index')
            ->with('success','Item Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(informasi $informasi)
    {
        return view('informasi.show',compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(informasi $informasi)
    {
        return view('informasi.edit',compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$informasi)
    {
        $request->validate(
            [
                'judul' => 'required|max:8000',
                'tempat' => 'required',
                'deskripsi' => 'required',
            ]);
            if($request->gambar){
                $file = $request->file('gambar');
                $namaFile = $file->getClientOriginalName();
                $tujuanFile = 'asset/gambar';
                $info = informasi::where('id', $informasi)->first();
                Storage::delete($info->gambar);
                $file->move($tujuanFile, $namaFile);
                informasi::where('id', $informasi)
                ->update([
                    'judul' => $request->judul,
                    'tempat' => $request->tempat,
                    'tanggal' => date('Y-m-d'),
                    'deskripsi' =>  $request->deskripsi,
                    'gambar' =>  $namaFile,
                    'user_id' => Auth::user()->id,
                ]);
            }else{
                informasi::where('id', $informasi)
                ->update([
                    'judul' => $request->judul,
                    'tempat' => $request->tempat,
                    'tanggal' => date('Y-m-d'),
                    'deskripsi' =>  $request->deskripsi,
                    'user_id' => Auth::user()->id,
                ]);
            }
            

            return redirect()->route('informasi.index')
               ->with('success','Data sudah diperbaharui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(informasi $informasi)
    {
        $informasi->delete();

        return redirect()->route('informasi.index')
                        ->with('success','Data berhasil dihapus');
    }
}
