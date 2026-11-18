<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Personal Management Finance</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex font-sans overflow-x-hidden">

    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-950/35 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-64 w-[500px] h-[500px] bg-emerald-900/20 rounded-full blur-3xl pointer-events-none"></div>

    <aside class="w-64 bg-[#08120e]/80 backdrop-blur-md border-r border-gray-800/60 hidden md:flex flex-col justify-between p-6 z-20">
        <div>
            <div class="mb-10">
                <h2 class="text-sm font-semibold tracking-wide text-gray-200 leading-snug">
                    Personal<br>Management Finance
                </h2>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Beranda
                </a>

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


    <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10 max-w-2xl">


        <h1 class="text-2xl sm:text-3xl font-bold tracking-tight mb-6">
            Pemasukan dan Pengeluaran
        </h1>


        <div class="bg-[#0b1410]/95 border border-gray-800/85 p-6 sm:p-8 rounded-3xl shadow-xl backdrop-blur-md mb-8">


            <div class="flex bg-[#121c17] p-1.5 rounded-2xl mb-6 border border-gray-800/50">
                <button type="button" class="w-1/2 py-3 text-sm font-medium bg-[#1e2d25] text-white rounded-xl shadow-md transition cursor-pointer">
                    Pengeluaran
                </button>
                <button type="button" class="w-1/2 py-3 text-sm font-medium text-gray-400 hover:text-white transition cursor-pointer">
                    Pemasukan
                </button>
            </div>


            <form action="#" method="POST" class="space-y-5">
                @csrf

                <div class="space-y-2">
                    <label class="block text-xs font-medium text-gray-400">Jumlah (Rp)</label>
                    <input type="text" value="50000" required
                        class="w-full bg-[#131d17] border border-gray-800/90 rounded-2xl px-4 py-3.5 text-sm text-gray-100 focus:outline-none focus:border-emerald-500 transition shadow-inner">
                </div>


                <div class="space-y-2 relative">
                    <label class="block text-xs font-medium text-gray-400">Kategori</label>
                    <div class="relative">
                        <select class="w-full bg-[#131d17] border border-gray-800/90 rounded-2xl px-4 py-3.5 text-sm text-gray-100 focus:outline-none focus:border-emerald-500 appearance-none cursor-pointer transition">
                            <option value="makanan" selected>Makanan</option>
                            <option value="belanja">Belanja</option>
                            <option value="tagihan">Tagihan</option>
                            <option value="transportasi">Transportasi</option>
                        </select>

                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="space-y-2">
                    <label class="block text-xs font-medium text-gray-400">Catatan</label>
                    <input type="text" placeholder="Opsional"
                        class="w-full bg-[#131d17] border border-gray-800/90 rounded-2xl px-4 py-3.5 text-sm text-gray-300 placeholder-gray-600 focus:outline-none focus:border-emerald-500 transition shadow-inner">
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3.5 px-4 rounded-2xl transition shadow-lg shadow-emerald-950/20 text-sm">
                        Simpan transaksi
                    </button>
                </div>
            </form>

        </div>


        <div>
            <h2 class="text-lg font-bold tracking-tight mb-4">Riwayat</h2>

            <div class="space-y-4">

                <div class="flex justify-between items-center pb-4 border-b border-gray-800/60">
                    <div>
                        <p class="text-sm font-medium text-gray-100">Makan siang</p>
                        <p class="text-xs text-gray-500 mt-0.5">Makanan · 3 Nov</p>
                    </div>
                    <span class="text-sm font-semibold text-rose-400">-Rp45.000</span>
                </div>


                <div class="flex justify-between items-center pb-2">
                    <div>
                        <p class="text-sm font-medium text-gray-100">Bensin</p>
                        <p class="text-xs text-gray-500 mt-0.5">Transportasi · 2 Nov</p>
                    </div>
                    <span class="text-sm font-semibold text-rose-400">-Rp80.000</span>
                </div>
            </div>
        </div>

    </main>

</body>

</html>