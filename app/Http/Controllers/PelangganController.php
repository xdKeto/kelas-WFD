<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function create(){

        // $pelanggan = new Pelanggan::all();
        return view("pelanggan.create");
    }
    
    public function insert(Request $r){
        $pelanggan = new Pelanggan;
        
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk;
        $pelanggan->tgl_lahir = $r->tgl_lahir;
        $pelanggan->alamat = $r->alamat;
        $pelanggan->save();
        
        return redirect("pelanggan")->with("success","");
        
    }

    // make a function to update pelanggan
    public function update(Request $r){
        $pelanggan = Pelanggan::find($r->id);
        
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk;
        $pelanggan->tgl_lahir = $r->tgl_lahir;
        $pelanggan->alamat = $r->alamat;
        $pelanggan->save();
        
        return redirect("pelanggan")->with("success","");
    }

    public function edit(Request $pelanggan){
        $pelanggan = Pelanggan::find($pelanggan->id);
        return view("pelanggan.edit")->with('pelanggan', $pelanggan);
    }

    public function delete(Request $pelanggan){
        $pelanggan = Pelanggan::find($pelanggan->id);
        $pelanggan->delete();

        return redirect('pelanggan')->with('success', 'pelanggan deleted succesfully');
    }
    

    // delete pelanggan
    
}