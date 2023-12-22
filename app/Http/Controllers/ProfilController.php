<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
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
        $profil = profil::latest()->paginate(8);
        return view('profil.index',compact('profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
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
                'nama' => 'required|max:8000',
                'jabatan' => 'required',
                'gambar' => 'required',
                'motivasi' => 'required',
            ]);
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';

            $file->move($tujuanFile, $namaFile);


            $newprofil = new profil;
            $newprofil->nama = $request->nama;
            $newprofil->jabatan = $request->jabatan;
            $newprofil->gambar = $namaFile;
            $newprofil->motivasi = $request->motivasi;
            $newprofil->user_id = Auth::user()->id;
            $newprofil->save();

            return redirect()->route('profil.index')
            ->with('success','Item Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(profil $profil)
    {
        return view('profil.show',compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(profil $profil)
    {
        return view('profil.edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$profil)
    {
        $request->validate(
            [
                'nama' => 'required|max:8000',
                'jabatan' => 'required',
                'motivasi' => 'required',
            ]);
            if($request->gambar){
                $file = $request->file('gambar');
                $namaFile = $file->getClientOriginalName();
                $tujuanFile = 'asset/gambar';
                $file->move($tujuanFile, $namaFile);
                $info = profil::where('id', $profil)->first();
                Storage::delete($info->gambar);
                profil::where('id', $profil)
                ->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'motivasi' =>  $request->motivasi,
                    'gambar' => $namaFile,
                    'user_id' => Auth::user()->id,
                ]);
            }else{
                profil::where('id', $profil)
                ->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'motivasi' =>  $request->motivasi,
                    'user_id' => Auth::user()->id,
                ]);
            }
            
               return redirect()->route('profil.index')
               ->with('success','Data sudah diperbaharui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(profil $profil)
    {
        $profil->delete();

        return redirect()->route('profil.index')
                        ->with('success','Data berhasil dihapus');
    }
}
