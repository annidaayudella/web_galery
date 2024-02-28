<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\UpdateGaleriRequest;
use Illuminate\Support\Facedes\Auth;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::where('iduser',Auth::user()->id)->get();
        return view('timeline',['galeris'=>$galeris]);
    }
    /**
     * show the form creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     *@param \App\Http\Requests\StoreGaleriRequest $request
     *@return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'foto'=>'required',
            'deskripsi'=>'required',
        ]);

        $namafoto = Auth::user()->id.'-' .date('YmdHis').$request->foto->getClientOriginalName();
        $data = [
            'judul' =>$request->judul,
            'foto' =>$namafoto,
            'deskripsi'=>$request->deskripsi,
            'tanggal' => now(),
            'iduser'=>Auth::user()->id,
        ];
        $request->foto->move(public_path('img'),$namafoto);
        Galeri::create($data);
        return redirect('galeri');
    }

    /**
     * Display the specified resource.
     * 
     * @param \App\Models\Galeri $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        $galeri->delete();
        return redirect('galeri');
    }

    /**
     * show the form for editing the specified resource.
     * 
     * @param \App\Models\Galeri $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\UpdateGaleriRequest $request
     * @param \App\Models\Galeri $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Galeri $galeri)
    {
        if ($request->hasFile('foto')){
            $namafoto = Auth::user()->id.'-' .date(YmdHis);
            $request ->foto->getClienOriginalName();
            $request ->foto->movo(public_path('img'),$namafoto);
            $galeri ->judul= $request->judul;
            $galeri->foto = $namafoto;
            $galeri->deskripsi = $request->deskripsi;
            $galeri->tanggal = now();
            $galeri->iduser = Auth::user()->id;
            $galeri->save();
        }else{
            $galeri->judul=$request->judul;
            $galeri->foto=$galeri->foto;
            $galeri->deskripsi=$request->deskripsi;
            $galeri->tanggal = now();
            $galeri->save(); 
        }
        return redirect('galeri');

        }
        /**
         * Remove the specified resource form storage.
         * 
         * @param \App\Models\Galeri $galeri
         * @return \Illuminate\Http\Response
         */
        public function destroy(Galeri $galeri)
        {
            //
        }
    }