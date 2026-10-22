<?php

namespace App\Http\Controllers;

use App\Models\Nft;

class NftController extends Controller
{
    public function index()
    {
        $nfts = Nft::all();

        return view('welcome', compact('nfts'));
    }
}