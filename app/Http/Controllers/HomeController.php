<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasi;
use App\Models\profil;
use App\Models\sumbangan;
use App\Models\komentar;
use App\Models\galeri;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        if($request->ajax() ){
            $informasis=informasi::where('judul','like','%'.$request->keywords.'%')->get();
            return view('list',compact('informasis'));
        }
        return view('awal');
    }
    public function create()
    {
        return view('sumbangan');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->barang){
            $request->validate(
                [
                    'nama' => 'required|max:8000',
                    'alamat' => 'required',
                    'notelp' => 'required',
                    'jenis' => 'required',
                    'barang' => 'required',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
                ]);
        }
        else if($request->uang){
            $request->validate(
                [
                    'nama' => 'required|max:8000',
                    'alamat' => 'required',
                    'notelp' => 'required',
                    'jenis' => 'required',
                    'uang' => 'required',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
                ]);
        }
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';
            
            $file->move($tujuanFile, $namaFile);
            
            $sumbangan = new sumbangan;
            $sumbangan->nama = $request->nama;
            $sumbangan->alamat = $request->alamat;
            $sumbangan->notelp = $request->notelp;
            $sumbangan->jenis = $request->jenis;
            if($request->barang){
                $sumbangan->jumlah = $request->barang;
            }else if($request->uang){
                $sumbangan->jumlah = $request->uang;
            }
            $sumbangan->gambar = $namaFile;
            $sumbangan->user_id = NULL;
            $sumbangan->save();
            
            return redirect()->route('awal')->with('success','Item Berhasil ditambahkan.');

            
        }
        public function show(Request $request,$informasi)
        {
            $informasis=informasi::where('id',$informasi)->get(); 
            return view('lihat',compact('informasis') );
        }

        public function show2(Request $request,$galeri)
        {
            $galeris=galeri::where('id',$galeri)->get(); 
            return view('lihatgaleri',compact('galeris') );
        }

        public function galeri(Request $request)
        {   
            if($request->ajax() ){
                $galeris=galeri::where('judul','like','%'.$request->keywords.'%')->get();
                return view('list2',compact('galeris'));
            }
            return view('galeri');
        }
        public function profil(Request $request)
        {   
            $profils=profil::get();
            return view('profil',compact('profils'));
        }
        public function informasi(Request $request)
        {   
            $informasis=informasi::get();
            return view('informasi',compact('informasis'));
        }
    }
    