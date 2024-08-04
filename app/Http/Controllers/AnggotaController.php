<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $anggota = DB::table('xtb_anggota')->get();  
        return view ('anggota/index', compact('anggota'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_anggota')->insert([
                'id_anggota' => $request ->id_anggota,  
                'nama' => $request ->nama,
                'kelas' => $request ->kelas
                
                ]); 

                
            return  redirect('anggota')-> with ('status', 'anggota buku berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('anggota')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $anggota = DB::table('xtb_anggota')->get();  
        return view('anggota.show',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_anggota)
    {
        // dd('edit');
        $anggota = DB::table('xtb_anggota')->where('id_anggota', $id_anggota)->first();   
        return view('anggota/edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_anggota)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_anggota') ->where('id_anggota', $id_anggota)
       ->update([ 
           'id_anggota' => $request ->id_anggota,
           'nama' => $request ->nama,
           'kelas' => $request ->kelas 
       ]);
       return  redirect('anggota')-> with ('status', 'jenis buku berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('anggota')-> with ('status', 'jenis buku gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_anggota)
    {
        // dd('delete');
       $anggota = DB::table('xtb_anggota')->where('id_anggota', $id_anggota)->delete();      
       return  redirect('anggota')-> with ('status', 'Data jenis buku berhasil dihapus..');
    }
}
