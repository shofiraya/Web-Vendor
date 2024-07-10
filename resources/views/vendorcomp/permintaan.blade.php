<!-- resources/views/vendorcomp/negosiasi.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>VendorComp Negosiasi</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="navbar bg-neutral">
        <div class="flex-1">
            <a href="{{ url('/vendorcomp/dashboard') }}" class="btn btn-ghost text-xl text-white">LOGO</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg width="30" height="31" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41675 14.625C4.41675 10.9893 5.9532 7.50256 8.6881 4.93175C11.423 2.36094 15.1323 0.916672 19.0001 0.916672C22.8678 0.916672 26.5771 2.36094 29.312 4.93175C32.047 7.50256 33.5834 10.9893 33.5834 14.625V21.9962L37.3792 29.1323C37.554 29.4608 37.6365 29.8258 37.6189 30.1926C37.6014 30.5595 37.4843 30.916 37.2789 31.2284C37.0735 31.5408 36.7866 31.7986 36.4454 31.9774C36.1041 32.1562 35.7199 32.2501 35.3292 32.25H27.0709C26.6075 33.9307 25.5635 35.4192 24.1027 36.4818C22.6419 37.5444 20.8472 38.121 19.0001 38.121C17.153 38.121 15.3582 37.5444 13.8974 36.4818C12.4367 35.4192 11.3927 33.9307 10.9292 32.25H2.67091C2.28024 32.2501 1.89604 32.1562 1.5548 31.9774C1.21356 31.7986 0.926616 31.5408 0.721214 31.2284C0.515813 30.916 0.398776 30.5595 0.381221 30.1926C0.363666 29.8258 0.446175 29.4608 0.620912 29.1323L4.41675 21.9962V14.625ZM15.3917 32.25C15.7575 32.8454 16.2834 33.3398 16.9168 33.6835C17.5502 34.0272 18.2687 34.2082 19.0001 34.2082C19.7314 34.2082 20.4499 34.0272 21.0833 33.6835C21.7167 33.3398 22.2427 32.8454 22.6084 32.25H15.3917ZM19.0001 4.83334C16.2374 4.83334 13.5879 5.86496 11.6344 7.70125C9.68088 9.53755 8.58341 12.0281 8.58341 14.625V21.9962C8.58337 22.6039 8.43287 23.2033 8.14383 23.7469L5.70633 28.3333H32.2959L29.8584 23.7469C29.5686 23.2035 29.4174 22.6041 29.4167 21.9962V14.625C29.4167 12.0281 28.3193 9.53755 26.3658 7.70125C24.4123 5.86496 21.7628 4.83334 19.0001 4.83334Z" fill="white" />
                        </svg>
                        <span class="badge badge-xs badge-error indicator-item"></span>
                    </div>
                </button>
                <li><a class="text-white text-xl">Vendor A</a></li>
                <li>
                    <details>
                        <summary>
                            <svg width="30" height="30" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.66699 28.5C1.66699 26.4666 2.47473 24.5166 3.91251 23.0788C5.35029 21.641 7.30033 20.8333 9.33366 20.8333H24.667C26.7003 20.8333 28.6504 21.641 30.0881 23.0788C31.5259 24.5166 32.3337 26.4666 32.3337 28.5C32.3337 29.5166 31.9298 30.4917 31.2109 31.2105C30.492 31.9294 29.517 32.3333 28.5003 32.3333H5.50033C4.48366 32.3333 3.50864 31.9294 2.78975 31.2105C2.07086 30.4917 1.66699 29.5166 1.66699 28.5Z" stroke="#EDEDED" stroke-width="2.5" stroke-linejoin="round" />
                                <path d="M17.0004 13.1666C20.176 13.1666 22.7504 10.5923 22.7504 7.41663C22.7504 4.24099 20.176 1.66663 17.0004 1.66663C13.8247 1.66663 11.2504 4.24099 11.2504 7.41663C11.2504 10.5923 13.8247 13.1666 17.0004 13.1666Z" stroke="#EDEDED" stroke-width="2.5" />
                            </svg>
                        </summary>
                        <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 p-2 shadow">
                            <li><a>Profile</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/vendorcomp/permintaan') }}" class="active">Permintaan Baru</a></li>
            <li><a href="{{ url('/vendorcomp/negosiasi') }}">Negosiasi</a></li>
            <li><a href="{{ url('/vendorcomp/riwayat') }}">Riwayat</a></li>
        </ul>
    </nav>
    <main>
        <section class="permintaan">
            <section class="request">
                <div class="request-card">
                    <h2 class="font-bold space-x-10">PT. INKA Multi Solusi</h2>
                    <p>Perusahaan ABC sedang mencari vendor untuk menyediakan jasa pengiriman logistik untuk pengiriman bulan
                        Agustus 2024. Proyek ini mencakup pengiriman barang dari pusat
                        distribusi di Kota A ke pelanggan di wilayah B, C, dan D.
                    </p>
                    <p>
                    <ul>Spesifikasi Kebutuhan:
                        <li>Jumlah Pengiriman: 500 paket per bulan.</li>
                        <li>Jenis Barang: Berbagai produk konsumen non-perishable.</li>
                        <li>Waktu Pengiriman: Setiap hari kerja, dengan waktu yang telah ditentukan.</li>
                        <li>Area Layanan: Wilayah B, C, dan D dengan titik pengiriman yang ditentukan.</li>
                    </ul>
                    </p>
                    <p class="font-bold">
                        Tenggat Waktu Pengajuan Penawaran: 15 Juli 2024
                    </p>
                    <div class="buttons ">
                        <button class="btn btn-success">Unduh Surat Permintaan Penawaran Harga</button>
                        <button class="btn btn-warning">Kembali</button>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer>
        <p>VendorComp A</p>
    </footer>
</body>

</html>