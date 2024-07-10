<!-- resources/views/vendorcomp/riwayat.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendorComp Riwayat</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Riwayat</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ url('/vendorcomp/dashboard') }}">Permintaan Baru</a></li>
            <li><a href="{{ url('/vendorcomp/negosiasi') }}">Negosiasi</a></li>
            <li><a href="{{ url('/vendorcomp/riwayat') }}" class="active">Riwayat</a></li>
        </ul>
    </nav>
    <main>
        <section class="history">
            <!-- Tambahkan konten riwayat di sini -->
        </section>
    </main>
    <footer>
        <p>VendorComp A</p>
    </footer>
</body>
</html>
