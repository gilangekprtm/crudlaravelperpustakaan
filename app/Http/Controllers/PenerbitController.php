<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $penerbit = DB::table('xtb_penerbit')->get();  
        return view ('penerbit/index', compact('penerbit'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try 
        {
                $query=DB::table('xtb_penerbit')->insert([
                'id_penerbit' => $request ->id_penerbit,  
                'nama_penerbit' => $request ->nama_penerbit,
                'alamat' => $request ->alamat,
                'no_telepon' => $request ->no_telepon 
                ]); 

                
            return  redirect('penerbit')-> with ('status', 'penerbit berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('penerbit')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $penerbit = DB::table('xtb_penerbit')->get();  
        return view('penerbit.show',compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penerbit)
    {
        // dd('edit');
        $penerbit = DB::table('xtb_penerbit')->where('id_penerbit', $id_penerbit)->first();   
        return  view('penerbit/edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_penerbit)
    {
        // dd('update'); 
       try 
       { 
       $affected = DB::table('xtb_penerbit') ->where('id_penerbit', $id_penerbit)
       ->update([ 
            'id_penerbit' => $request ->id_penerbit,
            'nama_penerbit' => $request ->nama_penerbit,
            'alamat' => $request ->alamat,
            'no_telepon' => $request ->no_telepon
       ]);
       return  redirect('penerbit')-> with ('status', 'penerbit berhasil diubah..'); 
       } 
           catch(\Illuminate\Database\QueryException $ex)
           {  
           return  redirect('penerbit')-> with ('status', 'penerbit gagal ditambah..'); 
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_penerbit)
    {
        // dd('delete');
       $penerbit = DB::table('xtb_penerbit')->where('id_penerbit', $id_penerbit)->delete();      
       return  redirect('penerbit')-> with ('status', 'Data penerbit berhasil dihapus..');
    }
}
