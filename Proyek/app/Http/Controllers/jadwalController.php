<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function tambahjadwal(Request $request){
        $request->validate([
            'nama_kegiatan'=>'required|string',
            'tema'=>'required|text',
            'waktu'=>'required|date',
            'lokasi'=>'required|string',
            'poster'=>'required|file',
            'kategori'=>'required|string',
        ]);
        try{
            $new_jadwal = new Jadwal;
            $new_jadwal->nama_kegiatan = $request->nama_kegiatan;
            $new_jadwal->tema = $request->tema;
            $new_jadwal->waktu = $request->waktu;
            $new_jadwal->lokasi = $request->lokasi;
            $new_jadwal->poster = $request->poster;
            $new_jadwal->kategori = $request->kategori;
            if ($request->hasFile('poster')){
                    $request->poster('poster')->move('images/',$request->file('poster')->getClientOriginName());
                    $new_jadwal->poster = $request->file('poster')->getClientOriginName();
                    $new_jadwal->save();
                }
            return redirect('/listkegiatan')->with('berhasil', 'jadwal berhasil ditambahkan');
        }catch(\Exception $e){
            return redirect('/from')->with('gagal', 'jadwal gagal ditambahkan');
        }
        }
        public function tampilanjadwal(){
            $all_jadwal = jadwal::all();
            return view ('listkegiatan', compact('all_jadwal'));
        }
        public function formjadwal(){
            return view ('form');
        }
        public function hapusjadwal($id){
            try{
            jadwal::where('id',$id)->delete();
            return redirect('/listkegiatan')->with('berhasil','jadwal berhasil dihapus');;
            }catch(\Exception $e){
                return redirect('/listkegiatan')->with('gagal', 'jadwal gagal dihapus');
            }
        }
}
