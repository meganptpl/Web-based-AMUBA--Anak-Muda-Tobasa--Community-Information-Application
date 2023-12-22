<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class GaleriController extends Controller
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
        $galeri = galeri::latest()->paginate(8);
        return view('galeri.index',compact('galeri'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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


            $newgaleri = new galeri;
            $newgaleri->judul = $request->judul;
            $newgaleri->tempat = $request->tempat;
            $newgaleri->tanggal = $request->tanggal;
            $newgaleri->gambar = $namaFile;
            $newgaleri->deskripsi = $request->deskripsi;
            $newgaleri->user_id = Auth::user()->id;
            $newgaleri->save();

            return redirect()->route('galeri.index')
            ->with('success','Item Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        return view('galeri.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        return view('galeri.edit',compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$galeri)
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
                $file->move($tujuanFile, $namaFile);
                $info = galeri::where('id', $galeri)->first();
                Storage::delete($info->gambar);
                galeri::where('id', $galeri)
                ->update([
                    'judul' => $request->judul,
                    'tempat' => $request->tempat,
                    'tanggal' => date('Y-m-d'),
                    'deskripsi' =>  $request->deskripsi,
                    'gambar' =>  $namaFile,
                    'user_id' => Auth::user()->id,
                ]);
            }else{
                galeri::where('id', $galeri)
                ->update([
                    'judul' => $request->judul,
                    'tempat' => $request->tempat,
                    'tanggal' => date('Y-m-d'),
                    'deskripsi' =>  $request->deskripsi,
                    'user_id' => Auth::user()->id,
                ]);
            }
            
               return redirect()->route('galeri.index')
               ->with('success','Data sudah diperbaharui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $galeri)
    {
        $galeri->delete();

        return redirect()->route('galeri.index')
                        ->with('success','Data berhasil dihapus');
    }
}
