<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendataanController extends Controller
{
    public function showFormPesan()
{
return view('pendataan');
}
public function submitOrder(Request $request){
$data = [
    'nik' => $request->input('nik'),
    'name' => $request->input('name'),
    'provinsi' => $request->input('provinsi'),
    'kota' => $request->input('kota'),
    'nomorTelpon' => $request->input('nomorTelpon'),

];
return view('dashboardAdmin', compact('data'));
}
}

