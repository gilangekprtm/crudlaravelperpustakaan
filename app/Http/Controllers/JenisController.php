<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $jenis = DB::table('xtb_jenis_buku')->get();  
        return view ('jenis/index', compact('jenis'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_jenis_buku')->insert([
                'id_jenis' => $request ->id_jenis,  
                'nama_jenis' => $request ->nama_jenis,
                ]); 

                
            return  redirect('jenis')-> with ('status', 'jenis buku berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('jenis')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $jenis = DB::table('xtb_jenis_buku')->get();  
        return view('jenis.show',compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_jenis)
    {
        // dd('edit');
        $jenis = DB::table('xtb_jenis_buku')->where('id_jenis', $id_jenis)->first();   
        return view('jenis/edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_jenis)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_jenis_buku') ->where('id_jenis', $id_jenis)
       ->update([ 
           'nama_jenis' => $request ->nama_jenis 
       ]);
       return  redirect('jenis')-> with ('status', 'jenis buku berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('jenis')-> with ('status', 'jenis buku gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_jenis)
    {
        // dd('delete');
       $jenis = DB::table('xtb_jenis_buku')->where('id_jenis', $id_jenis)->delete();      
       return  redirect('jenis')-> with ('status', 'Data jenis buku berhasil dihapus..');
    }
}
