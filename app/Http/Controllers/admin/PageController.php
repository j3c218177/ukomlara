<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function multimedia(){
        return view('multimedia');
    }

    public function database(){
        return view('database');
    }

    public function statistics(){
        return view('statistics');
    }

    public function pageform(){
        return view('pageform');
    }

    public function processForm(Request $request)
    {
        $validasiData=$request->validate([
            
            "name"=>["required", "min : 1"],
            "age"=>["required", "min : 1"],
            "address"=>["required", "min : 1"],
            "sex"=>["required", "min : 1"],
            "tester"=>["required", "min : 1"],
            "result"=>["required", "min : 1"]
            ]);

            return view("processform",compact("request"));
    }

    public function transaksi(){
        return view('transaksi');
    }

    /*public function prosesTransaksi(Request $transaksi)
    {
        $validasiData=$transaksi->validate([
            "nb1"=>"required",
            "hb1"=>"required",
            "jumlah1"=>"required",
            "nb2"=>"required",
            "hb2"=>"required",
            "jumlah2"=>"required",
            "nb3"=>"required",
            "hb3"=>"required",
            "jumlah3"=>"required",
            "diskon"=>"required"]);
        $br1 = ($transaksi->hb1*$transaksi->jumlah1);
        $br2 = ($transaksi->hb2*$transaksi->jumlah2);
        $br3 = ($transaksi->hb3*$transaksi->jumlah3);
        $total = ($br1+$br2+$br3);
        $diskon = $total*($transaksi->diskon/100);
        $totalbayar = $total-($total*($transaksi->diskon/100));
            return view("struk",compact("transaksi","total","totalbayar"));
    }*/
}
