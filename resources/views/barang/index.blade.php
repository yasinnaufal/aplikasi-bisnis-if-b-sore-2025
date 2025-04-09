<html>
    <body>
        <h1>Barang:</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>Barcode</td>
                <td>Satuan</td>
            </tr>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->nama  }}</td>
                <td>{{ $item->barcode  }}</td>
                <td>{{ $item->satuan}}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>