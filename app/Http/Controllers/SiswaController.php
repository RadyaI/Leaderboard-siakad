<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari_siswa')){
            $data_siswa = Siswa::where('nama_siswa','LIKE','%'.$request -> cari_siswa.'%')->get();
        }elseif($request->has('filter_angkatan')){
            $data_siswa = siswa::where('angkatan','LIKE','%'.$request -> filter_angkatan .'%')->get();
        }else{
            $data_siswa = siswa::get();
        }
            
        
        // if($request->has('filter_angkatan')){
        //     $data_siswa = siswa::where('angkatan','LIKE','%'.$request -> filter_angkatan .'%')->get();
        // }else{
        //     $data_siswa = siswa::get();
        // }

            $siswa=[
                'siswa' => $data_siswa
            ];
            return view('dashboard' , $siswa);
    }

    /**
     * Show the form for creating a new resource.
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
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
