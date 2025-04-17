<html>
    <body>
        <h1>Form Barang</h1>
        <form method="post" action="{{ $action }}">
            @csrf
            <div>
                <label for="barcode">Barcode:</label>
                <input type="text" name="barcode" value="{{ $item->barcode }}" />
            </div>
            <div>
                <label for="barcode">Nama Barang:</label>
                <input type="text" name="nama" value="{{ $item->nama }}" />
            </div>
            <div>
                <label for="satuan">Satuan:</label>
                <input type="text" name="satuan" value="{{ $item->satuan}}" />
            </div>
            <div>
                <input type="submit" value="Simpan" />
            </div>
        </form>
    </body>
</html>
