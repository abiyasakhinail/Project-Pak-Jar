<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Personal Management Finance</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex font-sans overflow-x-hidden relative">

    <!-- Efek Gradasi Cahaya Background (Dibuat Terang & Jelas) -->
    <div class="absolute top-0 right-0 w-[450px] h-[450px] bg-emerald-700/35 rounded-full blur-[120px] pointer-events-none z-0"></div>
    <div class="absolute bottom-0 left-64 w-[550px] h-[550px] bg-emerald-600/30 rounded-full blur-[130px] pointer-events-none z-0"></div>

    <!-- SIDEBAR KIRI -->
    <aside class="w-64 bg-[#08120e]/80 backdrop-blur-md border-r border-gray-800/60 hidden md:flex flex-col justify-between p-6 z-20">
        <div>
            <!-- Logo / Judul Sidebar -->
            <div class="mb-10">
                <h2 class="text-sm font-semibold tracking-wide text-gray-200 leading-snug">
                    Personal<br>Management Finance
                </h2>
            </div>

            <!-- Menu Navigasi -->
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Beranda
                </a>

                <!-- Menu Transaksi (Aktif) -->
                <a href="{{ route('transaksi') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm">
                    Transaksi
                </a>

                <a href="{{ route('tabungan') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Tabungan
                </a>

                <a href="{{ route('rekap') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Rekap
                </a>

                <a href="{{ route('akun') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Akun
                </a>
            </nav>
        </div>
    </aside>

    <!-- KONTEN UTAMA KANAN -->
    <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10">

        <!-- Header Halaman -->
        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Pemasukan dan Pengeluaran</h1>
            <p class="text-gray-400 text-sm mt-1">Catat dan kelola transaksi keuanganmu</p>
        </div>

        <!-- Grid 2 Kolom (Kiri: Form Input, Kanan: Riwayat) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

            <!-- KOLOM KIRI: Kotak Formulir Utama (7 Kolom) -->
            <div class="lg:col-span-7 bg-[#0b1410]/90 border border-gray-800/80 p-6 sm:p-8 rounded-2xl shadow-lg backdrop-blur-md">

                <!-- Tab Pilihan (Pengeluaran / Pemasukan) -->
                <div class="flex bg-[#121c17] p-1.5 rounded-xl mb-6 border border-gray-800/60">
                    <button type="button" id="tab-pengeluaran" onclick="switchTab('pengeluaran')"
                        class="w-1/2 py-2.5 text-sm font-medium bg-[#1e2d25] text-white rounded-lg shadow-sm transition cursor-pointer">
                        Pengeluaran
                    </button>
                    <button type="button" id="tab-pemasukan" onclick="switchTab('pemasukan')"
                        class="w-1/2 py-2.5 text-sm font-medium text-gray-400 hover:text-white rounded-lg transition cursor-pointer">
                        Pemasukan
                    </button>
                </div>

                <!-- Form Transaksi -->
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <input type="hidden" name="tipe" id="tipe-transaksi" value="pengeluaran">

                    <!-- Input Jumlah (Rp) -->
                    <div class="space-y-2">
                        <label class="block text-xs font-medium text-gray-400">Jumlah (Rp)</label>
                        <input type="text" value="50000" required
                            class="w-full bg-[#131d17] border border-gray-800/90 rounded-xl px-4 py-3 text-sm text-gray-100 focus:outline-none focus:border-emerald-500 transition">
                    </div>

                    <!-- Dropdown Kategori -->
                    <div class="space-y-2 relative">
                        <label class="block text-xs font-medium text-gray-400">Kategori</label>
                        <div class="relative">
                            <select id="select-kategori" class="w-full bg-[#131d17] border border-gray-800/90 rounded-xl px-4 py-3 text-sm text-gray-100 focus:outline-none focus:border-emerald-500 appearance-none cursor-pointer transition">
                                <option value="makanan" selected>Makanan</option>
                                <option value="belanja">Belanja</option>
                                <option value="tagihan">Tagihan</option>
                                <option value="transportasi">Transportasi</option>
                            </select>
                            <!-- Ikon Panah Dropdown -->
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Input Catatan (Opsional) -->
                    <div class="space-y-2">
                        <label class="block text-xs font-medium text-gray-400">Catatan</label>
                        <input type="text" placeholder="Opsional"
                            class="w-full bg-[#131d17] border border-gray-800/90 rounded-xl px-4 py-3 text-sm text-gray-300 placeholder-gray-600 focus:outline-none focus:border-emerald-500 transition">
                    </div>

                    <!-- Tombol Simpan Transaksi -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3 px-4 rounded-xl transition shadow-lg shadow-emerald-950/20 text-sm cursor-pointer">
                            Simpan transaksi
                        </button>
                    </div>
                </form>

            </div>

            <!-- KOLOM KANAN: Riwayat Transaksi (5 Kolom) -->
            <div class="lg:col-span-5 bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md">
                <h2 class="text-sm font-semibold text-gray-200 mb-6">Riwayat</h2>

                <div class="space-y-4">
                    <!-- Riwayat 1 -->
                    <div class="flex justify-between items-center pb-4 border-b border-gray-800/60">
                        <div>
                            <p class="text-sm font-medium text-gray-100">Makan siang</p>
                            <p class="text-xs text-gray-500 mt-0.5">Makanan · 3 Nov</p>
                        </div>
                        <span class="text-sm font-semibold text-rose-400">-Rp45.000</span>
                    </div>

                    <!-- Riwayat 2 -->
                    <div class="flex justify-between items-center pb-2">
                        <div>
                            <p class="text-sm font-medium text-gray-100">Bensin</p>
                            <p class="text-xs text-gray-500 mt-0.5">Transportasi · 2 Nov</p>
                        </div>
                        <span class="text-sm font-semibold text-rose-400">-Rp80.000</span>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>

</html>
