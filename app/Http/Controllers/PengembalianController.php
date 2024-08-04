<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $pengembalian = DB::table('xtb_pengembalian')->get();  
        return view ('pengembalian/index', compact('pengembalian'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengembalian/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_pengembalian')->insert([
                'id_pengembalian' => $request ->id_pengembalian,  
                'id_peminjaman' => $request ->id_peminjaman,
                'buku' => $request ->buku,
                'jenis' => $request ->jenis,
                'tanggal_kembali' => $request ->tanggal_kembali,
                'kondisi_buku' => $request ->kondisi_buku
                ]); 

                
            return  redirect('pengembalian')-> with ('status', 'pengembalian berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('pengembalian')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $pengembalian = DB::table('xtb_pengembalian')->get();  
        return view('pengembalian.show',compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pengembalian)
    {
        // dd('edit');
        $pengembalian = DB::table('xtb_pengembalian')->where('id_pengembalian', $id_pengembalian)->first();   
        return  view('pengembalian/edit', compact('pengembalian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pengembalian)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_pengembalian') ->where('id_pengembalian', $id_pengembalian)
       ->update([   
            'id_pengembalian' => $request ->id_pengembalian,
            'id_peminjaman' => $request ->id_peminjaman,
            'buku' => $request ->buku,
            'jenis' => $request ->jenis,
            'tanggal_kembali' => $request ->tanggal_kembali,
            'kondisi_buku' => $request ->kondisi_buku 
       ]);
       return  redirect('pengembalian')-> with ('status', 'pengembalian berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('pengembalian')-> with ('status', 'pengembalian gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pengembalian)
    {
        // dd('delete');
       $pengembalian = DB::table('xtb_pengembalian')->where('id_pengembalian', $id_pengembalian)->delete();      
       return  redirect('pengembalian')-> with ('status', 'Data pengembalian berhasil dihapus..');
    }
}
