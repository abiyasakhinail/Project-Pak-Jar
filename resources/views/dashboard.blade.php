<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Personal Management Finance</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex font-sans overflow-x-hidden">

    
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-950/30 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="absolute bottom-0 left-64 w-[500px] h-[500px] bg-emerald-900/20 rounded-full blur-3xl pointer-events-none"></div>


        <aside class="w-64 bg-[#08120e]/80 backdrop-blur-md border-r border-gray-800/60 hidden md:flex flex-col justify-between p-6 z-20">
            <div>

                <div class="mb-10">
                    <h2 class="text-sm font-semibold tracking-wide text-gray-200 leading-snug">
                        Personal<br>Management Finance
                    </h2>
                </div>


                <nav class="space-y-1">

                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('dashboard') ? 'bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm' : 'text-gray-400 hover:text-white hover:bg-[#0e1713]' }} transition">
                        Beranda
                    </a>


                    <a href="{{ route('transaksi') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('transaksi') ? 'bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm' : 'text-gray-400 hover:text-white hover:bg-[#0e1713]' }} transition">
                        Transaksi
                    </a>


                    <a href="{{ route('tabungan') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('tabungan') ? 'bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm' : 'text-gray-400 hover:text-white hover:bg-[#0e1713]' }} transition">
                        Tabungan
                    </a>


                    <a href="{{ route('rekap') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('rekap') ? 'bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm' : 'text-gray-400 hover:text-white hover:bg-[#0e1713]' }} transition">
                        Rekap
                    </a>


                    <a href="{{ route('akun') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('akun') ? 'bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm' : 'text-gray-400 hover:text-white hover:bg-[#0e1713]' }} transition">
                        Akun
                    </a>
                </nav>
            </div>
        </aside>


        <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10">


            <div class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Halo, Rina</h1>
                <p class="text-gray-400 text-sm mt-1">Ringkasan keuanganmu bulan ini</p>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">


                <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                    <p class="text-xs text-gray-400 mb-1">Saldo</p>
                    <h3 class="text-xl sm:text-2xl font-bold tracking-tight">Rp5.240.000</h3>
                </div>


                <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                    <p class="text-xs text-gray-400 mb-1">Pemasukan</p>
                    <h3 class="text-xl sm:text-2xl font-bold text-emerald-400 tracking-tight">Rp7.200.000</h3>
                </div>


                <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                    <p class="text-xs text-gray-400 mb-1">Pengeluaran</p>
                    <h3 class="text-xl sm:text-2xl font-bold text-rose-400 tracking-tight">Rp1.960.000</h3>
                </div>

                <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                    <p class="text-xs text-gray-400 mb-1">Total tabungan</p>
                    <h3 class="text-xl sm:text-2xl font-bold tracking-tight">Rp4.500.000</h3>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                <div class="lg:col-span-7 bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md">
                    <h3 class="text-sm font-semibold text-gray-200 mb-6">Transaksi terbaru</h3>

                    <div class="space-y-5">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-800/50">
                            <div>
                                <p class="text-sm font-medium text-gray-200">Makan siang</p>
                                <p class="text-xs text-gray-500 mt-0.5">Makanan · 3 Nov</p>
                            </div>
                            <span class="text-sm font-semibold text-rose-400">-Rp45.000</span>
                        </div>

                        <div class="flex justify-between items-center pb-4 border-b border-gray-800/50">
                            <div>
                                <p class="text-sm font-medium text-gray-200">Gaji bulanan</p>
                                <p class="text-xs text-gray-500 mt-0.5">Gaji · 1 Nov</p>
                            </div>
                            <span class="text-sm font-semibold text-emerald-400">+Rp6.500.000</span>
                        </div>


                        <div class="flex justify-between items-center pb-4 border-b border-gray-800/50">
                            <div>
                                <p class="text-sm font-medium text-gray-200">Listrik</p>
                                <p class="text-xs text-gray-500 mt-0.5">Tagihan · 30 Okt</p>
                            </div>
                            <span class="text-sm font-semibold text-rose-400">-Rp350.000</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium text-gray-200">Bensin</p>
                                <p class="text-xs text-gray-500 mt-0.5">Transportasi · 29 Okt</p>
                            </div>
                            <span class="text-sm font-semibold text-rose-400">-Rp80.000</span>
                        </div>
                    </div>
                </div>


                <div class="lg:col-span-5 bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md">
                    <h3 class="text-sm font-semibold text-gray-200 mb-6">Pengeluaran terbesar</h3>

                    <div class="space-y-6">

                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-300 font-medium">Belanja</span>
                                <span class="text-gray-400 font-semibold">42%</span>
                            </div>
                            <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                                <div class="bg-rose-400 h-full rounded-full" style="width: 42%;"></div>
                            </div>
                        </div>


                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-300 font-medium">Tagihan</span>
                                <span class="text-gray-400 font-semibold">28%</span>
                            </div>
                            <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                                <div class="bg-rose-400 h-full rounded-full" style="width: 28%;"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-300 font-medium">Makanan</span>
                                <span class="text-gray-400 font-semibold">20%</span>
                            </div>
                            <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                                <div class="bg-rose-400 h-full rounded-full" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>

</body>

</html>