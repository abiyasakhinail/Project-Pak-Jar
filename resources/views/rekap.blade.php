<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Keuangan - Personal Management Finance</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex font-sans overflow-x-hidden">


    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-950/30 rounded-full blur-3xl pointer-events-none"></div>
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


                <div class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-500 cursor-default select-none">
                    Transaksi
                </div>

                <a href="{{ route('tabungan') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Tabungan
                </a>

                <a href="{{ route('rekap') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm">
                    Rekap
                </a>

                <a href="{{ route('akun') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">
                    Akun
                </a>
            </nav>
        </div>
    </aside>


    <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10">


        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Rekap keuangan</h1>


            <div class="relative">
                <select class="bg-[#0b1410] border border-gray-800 text-gray-200 text-sm rounded-xl px-4 py-2.5 pr-10 focus:outline-none focus:border-emerald-500 appearance-none cursor-pointer shadow-md">
                    <option value="juni-2026">Juni 2026</option>
                    <option value="juli-2026">Juli 2026</option>
                    <option value="agustus-2026">Agustus 2026</option>
                    <option value="september-2026">September 2026</option>
                    <option value="oktober-2026">Oktober 2026</option>
                    <option value="november-2026" selected>November 2026</option>
                </select>

                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">


            <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                <p class="text-xs text-gray-400 mb-1">Pemasukan</p>
                <h3 class="text-xl sm:text-2xl font-bold text-emerald-400 tracking-tight">Rp7.200.000</h3>
            </div>

            <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                <p class="text-xs text-gray-400 mb-1">Pengeluaran</p>
                <h3 class="text-xl sm:text-2xl font-bold text-rose-400 tracking-tight">Rp1.960.000</h3>
            </div>

            <div class="bg-[#0b1410]/90 border border-gray-800/80 p-5 rounded-2xl shadow-lg backdrop-blur-md">
                <p class="text-xs text-gray-400 mb-1">Selisih</p>
                <h3 class="text-xl sm:text-2xl font-bold tracking-tight">Rp5.240.000</h3>
            </div>

        </div>


        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <div class="lg:col-span-7 bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md">
                <h3 class="text-sm font-semibold text-gray-200 mb-6">Pengeluaran per kategori</h3>

                <div class="space-y-6">

                    <div>
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-gray-300 font-medium">Belanja</span>
                            <span class="text-gray-400 font-semibold">Rp820.000 · 42%</span>
                        </div>
                        <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                            <div class="bg-rose-400 h-full rounded-full" style="width: 42%;"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-gray-300 font-medium">Tagihan</span>
                            <span class="text-gray-400 font-semibold">Rp550.000 · 28%</span>
                        </div>
                        <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                            <div class="bg-rose-400 h-full rounded-full" style="width: 28%;"></div>
                        </div>
                    </div>


                    <div>
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-gray-300 font-medium">Makanan</span>
                            <span class="text-gray-400 font-semibold">Rp390.000 · 20%</span>
                        </div>
                        <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                            <div class="bg-rose-400 h-full rounded-full" style="width: 20%;"></div>
                        </div>
                    </div>


                    <div>
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-gray-300 font-medium">Transportasi</span>
                            <span class="text-gray-400 font-semibold">Rp200.000 · 10%</span>
                        </div>
                        <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden">
                            <div class="bg-rose-400 h-full rounded-full" style="width: 10%;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="lg:col-span-5 bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md flex flex-col justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-gray-200 mb-2">Enam bulan terakhir</h3>


                    <div class="flex items-center space-x-4 text-xs text-gray-400 mb-6">
                        <div class="flex items-center space-x-1.5">
                            <span class="w-2.5 h-2.5 bg-emerald-400 rounded-sm inline-block"></span>
                            <span>pemasukan</span>
                        </div>
                        <div class="flex items-center space-x-1.5">
                            <span class="w-2.5 h-2.5 bg-rose-400 rounded-sm inline-block"></span>
                            <span>pengeluaran</span>
                        </div>
                    </div>
                </div>


                <div class="flex items-end justify-between h-44 pt-4 px-2 border-b border-gray-800/60 pb-2">


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 65%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 40%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Jun</span>
                    </div>


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 75%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 50%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Jul</span>
                    </div>


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 60%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 45%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Agu</span>
                    </div>


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 80%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 48%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Sep</span>
                    </div>


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 70%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 55%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Okt</span>
                    </div>


                    <div class="flex flex-col items-center gap-1.5 w-full">
                        <div class="flex items-end justify-center gap-1 w-full h-36">
                            <div class="w-2.5 bg-emerald-400/80 rounded-t-sm" style="height: 90%;"></div>
                            <div class="w-2.5 bg-rose-400/80 rounded-t-sm" style="height: 50%;"></div>
                        </div>
                        <span class="text-[11px] text-gray-400 font-medium">Nov</span>
                    </div>

                </div>
            </div>

        </div>

    </main>

</body>

</html>