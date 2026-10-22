<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;

Route::get('/', [NftController::class, 'index']);
Route::get('/nft/{id}', function ($id) {
    $nft = \App\Models\Nft::findOrFail($id);

    return view('detail', compact('nft'));
});