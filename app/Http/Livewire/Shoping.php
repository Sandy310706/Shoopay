<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Keranjang;

class Shoping extends Component
{
    public function render()
    {
        return view('livewire.shoping', [
            'datas' => Keranjang::all(),
            'jumlah' => Keranjang::sum('harga_barang'),
        ]);
    }
    public function simpan($nama_barang, $harga_barang)
    {
        // dd($nama_barang . '-' . $harga_barang);
        $simpan = new Keranjang();
        $simpan -> nama_barang = $nama_barang;
        $simpan -> harga_barang = $harga_barang;
        $simpan -> save();
    }
    public function hapus($idhapus)
    {
        $hapus = Keranjang::findorFail($idhapus);
        $hapus -> delete();
        $this -> reset();
    }
}
