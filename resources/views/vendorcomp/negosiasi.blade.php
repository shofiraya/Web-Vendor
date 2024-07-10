<!-- resources/views/vendorcomp/negosiasi.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendorComp Negosiasi</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Negosiasi</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ url('/vendorcomp/dashboard') }}">Permintaan Baru</a></li>
            <li><a href="{{ url('/vendorcomp/negosiasi') }}" class="active">Negosiasi</a></li>
            <li><a href="{{ url('/vendorcomp/riwayat') }}">Riwayat</a></li>
        </ul>
    </nav>
    <main>
        <section class="negotiation">
            <!-- Tambahkan konten negosiasi di sini -->
        </section>
    </main>
    <footer>
        <p>VendorComp A</p>
    </footer>
</body>
</html>
