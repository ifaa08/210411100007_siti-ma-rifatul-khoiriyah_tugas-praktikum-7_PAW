<?php

namespace App\Http\Controllers;
use App\Models\mahasiswaa;
use Illuminate\Http\Request;

class Modul7Controller extends Controller
{
    //tampil data
    public function home(Request $request){
        $title = "Menampilkan data";
        if($request->has('search')){
            $mahasiswaa = mahasiswaa::where('nim', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $mahasiswaa = mahasiswaa::all();
        }
        return view('home', ['mahasiswaa' => $mahasiswaa], compact('title'));
    }
    //tambah data
    public function tambah_data(){
        $title = "Menambahkan Data";
        return view('tambah_data', compact('title'));
    }
    public function tambah_baru(Request $request){
        $data = new mahasiswaa();
        $data->no = $request->no;
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save(); 
        return redirect('/');
    }
    //hapus data
    public function hapus_data($nim){
        $mahasiswaa = mahasiswaa::where('nim', $nim)->first();
        $mahasiswaa->delete();
        return redirect('/');
    }
    //tampil data sebelum diedit
    public function tampil_data($nim){
        $title = "Ubah Data";
        $mahasiswaa = mahasiswaa::where('nim', $nim)->first();
        return view('ubah_data', ['mahasiswaa' => $mahasiswaa], compact('title'));
    }
    //ubah data
    public function ubah_data(Request $request, $nim){
        $title = "Menampilkan data";
        $data = mahasiswaa::where('nim', $nim)->first();
        $data->no = $request->no;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save(); 
        return redirect('/');
    }
    //tampil mahasiswa satu
    public function tampil_data_mahasiswa($nim){
        $title = "Tampil Data Mahasiswa";
        $mahasiswaa = mahasiswaa::where('nim', 'LIKE', '%' .$nim->$nim. '%')->paginate(5);
        return view('data_mahasiswa', ['mahasiswaa' => $mahasiswaa], compact('title'));
    }
}
