<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HadithsController extends Controller{
    protected $apiUrl = 'https://api.hadith.gading.dev/';

    public function index()
    {
        // mengambil data Hadiths dari API
        $hadistData = $this->getHadistData();

        // menampilkan data dalam view
        return view('welcome', compact('hadistData'));
    }

    protected function getHadistData()
    {
        $client = new Client();

        $response = $client->get($this->apiUrl.'books/muslim?range=1-150');

        return json_decode($response->getBody(), true);
    }

}
