<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $buku = DB::table('xtb_buku')->get();  
        return view ('buku/index', compact('buku'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_buku')->insert([
                'id_buku' => $request ->id_buku,  
                'judul_buku' => $request ->judul_buku,
                'penulis' => $request ->penulis,
                'tahun_terbit' => $request ->tahun_terbit,
                'id_jenis' => $request ->id_jenis,
                'id_penerbit' => $request ->id_penerbit
                ]); 

                
            return  redirect('buku')-> with ('status', 'buku berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('buku')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $buku = DB::table('xtb_buku')->get();  
        return view('buku.show',compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_buku)
    {
        // dd('edit');
        $buku = DB::table('xtb_buku')->where('id_buku', $id_buku)->first();   
        return  view('buku/edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_buku)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_buku') ->where('id_buku', $id_buku)
       ->update([ 
           'judul_buku' => $request ->judul_buku 
       ]);
       return  redirect('buku')-> with ('status', 'buku berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('buku')-> with ('status', 'buku gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_buku)
    {
        // dd('delete');
       $buku = DB::table('xtb_buku')->where('id_buku', $id_buku)->delete();      
       return  redirect('buku')-> with ('status', 'Data buku berhasil dihapus..');
    }
}
