<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;

Route::get('/barang', function() {
    $items = Barang::all();
    return view('barang.index', ['items' => $items]);
});

Route::get('/barang/{id}', function(int $id) {
    $b = Barang::find($id);
    if (!is_null($b)) {
        return view('barang.show', ['item' => $b]);
    }
    return abort(404);
});

/*Route::get('/', function() {
    return 'Hello World';
});

Route::get('/{nama}', function(string $nama) {
    // return "Hello {$nama}";
    return view('hello', ['nama' => $nama]);
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/
