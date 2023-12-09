<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPembayaranController extends Controller
{
    //
    public function index(){
        return view('admin.pembayaran.index',[
            'pembayaran' => Pembayaran::all()
        ]);
    }

    public function konfirmasi(Request $request,$id){

        $pembayaran = Pembayaran::find($id);

        $validatedData = $request->validate([
            'status_pembayaran' => 'required'
        ]);

        Pembayaran::where('id_pembayaran',$pembayaran->id_pembayaran)->update($validatedData);

        Alert::success('Sukses', 'Data berhasil diperbarui!');

        return redirect('/admin/pembayaran');

    }
}
