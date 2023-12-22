<?php

namespace App\Http\Controllers;

use App\Models\sumbangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class SumbanganController extends Controller
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
    public function index(Request $request)
    {

        if($request->ajax() ){
            $sumbangan=sumbangan::where('nama','like','%'.$request->keywords.'%')->
            paginate(5);
            $totals = sumbangan::where('status', '=', 'Diterima')->get();
            return view('sumbangan.list',compact('sumbangan','totals'));
        }
        return view('sumbangan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sumbangan.create');
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
                'alamat' => 'required',
                'notelp' => 'required',
                'jenis' => 'required',
                'jumlah' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ]);

            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';

            $file->move($tujuanFile, $namaFile);

            $sumbangan = new sumbangan;
            $sumbangan->nama = $request->nama;
            $sumbangan->alamat = $request->alamat;
            $sumbangan->notelp = $request->notelp;
            $sumbangan->jenis = $request->jenis;
            $sumbangan->jumlah = $request->jumlah;
            $sumbangan->gambar = $namaFile;
            $sumbangan->status = 'Menunggu';
            $sumbangan->user_id = Auth::user()->id;
            $sumbangan->save();
            if(auth()->user()->name == "admin"){
                return redirect()->route('sumbangan.index')
                ->with('success','Item Berhasil ditambahkan.');
            }else{
                return redirect()->route('awal')
                ->with('success','Item Berhasil ditambahkan.');
            }
    }

    public function ditolak(sumbangan $sumbangan)
    {
        $sumbangan->status = 'Ditolak';
        $sumbangan->update();
        return redirect()->route('sumbangan.index')
            ->with('success','sumbangan ditolak.');
    }

    public function diterima(sumbangan $sumbangan)
    {
        $sumbangan->status = 'Diterima';
        $sumbangan->update();
        return redirect()->route('sumbangan.index')
            ->with('success','sumbangan diterima.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function show(sumbangan $sumbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(sumbangan $sumbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$sumbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(sumbangan $sumbangan)
    {
        //
    }
}
