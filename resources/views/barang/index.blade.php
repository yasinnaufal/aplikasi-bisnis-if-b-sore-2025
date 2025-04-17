<html>
    <body>
        <h1>Barang:</h1>
        <div>
            <a href="{{ route('barang.create') }}">Tambah Barang Baru</a>
        </div>
        <div>
            <form method="get" action="{{ route('barang.index') }}">
                <input type="text" name="q" placeholder="Cari barang"
                    value="{{ app('request')->query('q') }}" />
                <input type="submit" value="Filter" />
            </form>
        </div>
        <table>
            <tr>
                <td>Nama</td>
                <td>Barcode</td>
                <td>Satuan</td>
                <td>&nbsp;</td>
            </tr>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->nama  }}</td>
                <td>{{ $item->barcode  }}</td>
                <td>{{ $item->satuan}}</td>
                <td>
                    <a href="{{ route('barang.show', $item->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
        </table>
    </body>
</html>
