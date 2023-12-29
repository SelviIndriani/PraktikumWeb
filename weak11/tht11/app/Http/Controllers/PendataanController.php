<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendataanController extends Controller
{
    public function showFormPesan()
{
    $nama = 'Candy';
    $produk = array(
      array("Skintific" , 120000),
      array("Emina" , 75000),
      array("Avoskin" , 300000),
      array("MSglow" , 300000),
      array("Lacoco" , 400000),
      array("Somethinc" , 420000),
      array("Daviena" , 280000),
      array("Cosrx" , 450000),
    );
return view('pendataan', compact('nama','produk'));
}
public function submitOrder(Request $request){
    $nama = 'Candy';
    $produk = array(
      array("Skintific" , 120000),
      array("Emina" , 75000),
      array("Avoskin" , 300000),
      array("MSglow" , 300000),
      array("Lacoco" , 400000),
      array("Somethinc" , 420000),
      array("Daviena" , 280000),
      array("Cosrx" , 450000),
    );
return view('dashboardAdmin', compact('nama', 'produk'));
}

public function showPriceList(){
    $foods = Food::all();
    return view('home.pendataan', compact('foods'));
}

}

