<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $peminjaman = DB::table('xtb_peminjaman')->get();  
        return view ('peminjaman/index', compact('peminjaman'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjaman/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_peminjaman')->insert([
                'id_peminjaman' => $request ->id_peminjaman,  
                'nama' => $request ->nama,
                'kelas' => $request ->kelas,
                'buku' => $request ->buku,
                'jenis' => $request ->jenis,
                'tanggal' => $request ->tanggal
                ]); 

                
            return  redirect('peminjaman')-> with ('status', 'peminjaman berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('peminjaman')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $peminjaman = DB::table('xtb_peminjaman')->get();  
        return view('peminjaman.show',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_peminjaman)
    {
        // dd('edit');
        $peminjaman = DB::table('xtb_peminjaman')->where('id_peminjaman', $id_peminjaman)->first();   
        return  view('peminjaman/edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_peminjaman)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_peminjaman') ->where('id_peminjaman', $id_peminjaman)
       ->update([ 
           'nama' => $request ->nama,
           'kelas' => $request ->kelas,
           'buku' => $request ->buku,
           'jenis' => $request ->jenis,
           'tanggal' => $request ->tanggal 
       ]);
       return  redirect('peminjaman')-> with ('status', 'peminjaman berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('peminjaman')-> with ('status', 'peminjaman gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_peminjaman)
    {
        // dd('delete');
       $peminjaman = DB::table('xtb_peminjaman')->where('id_peminjaman', $id_peminjaman)->delete();      
       return  redirect('peminjaman')-> with ('status', 'Data peminjaman berhasil dihapus..');
    }
}
