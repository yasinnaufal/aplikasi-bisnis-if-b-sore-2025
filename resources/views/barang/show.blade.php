<html>
    <body>
        <h1>Detail Barang</h1>
        <div>
            <p>Nama: {{ $item->nama }}</p>
            <p>Barcode: {{ $item->barcode  }} </p>
            <p>Satuan: {{ $item->satuan  }}</p>
        </div>
        <div>
            <button onclick="keHalamanEdit()">Edit</button>
            <button onclick="konfirmasiHapus();">
            Delete
            </button>
        </div>
        <script>
            function konfirmasiHapus() {
                const konfirmasi =
                confirm("Yakin menghapus data barang?");

                if (konfirmasi) {
                    window.location =
                    "{{ route('barang.destroy', $item->id) }}";
                }
            }

            function keHalamanEdit() {
                window.location = "{{ route('barang.edit', $item->id) }}";
            }
        </script>
    </body>
</html>
