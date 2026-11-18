<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan - Personal Management Finance</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex font-sans overflow-x-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-950/30 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-64 w-[500px] h-[500px] bg-emerald-900/20 rounded-full blur-3xl pointer-events-none"></div>

    <aside class="w-64 bg-[#08120e]/80 backdrop-blur-md border-r border-gray-800/60 hidden md:flex flex-col justify-between p-6 z-20">
        <div>
            <div class="mb-10">
                <h2 class="text-sm font-semibold tracking-wide text-gray-200 leading-snug">Personal<br>Management Finance</h2>
            </div>
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Beranda</a>
                <a href="{{ route('transaksi') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Transaksi</a>
                <a href="{{ route('tabungan') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm">Tabungan</a>
                <a href="{{ route('rekap') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Rekap</a>
                <a href="{{ route('akun') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Akun</a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Tabungan</h1>
                <p class="text-gray-400 text-sm mt-1">Total tabungan Rp4.500.000 dari 2 target</p>
            </div>
            <button type="button" class="bg-transparent hover:bg-emerald-950/30 border border-gray-700/80 text-gray-200 font-medium px-4 py-2.5 rounded-xl transition text-sm shadow-sm flex items-center space-x-2">
                <span>Buat target baru</span>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-sm font-semibold text-gray-200">Dana darurat</h3>
                        <span class="text-xs font-semibold text-gray-400">45%</span>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-white mb-0.5">Rp3.000.000</h2>
                        <p class="text-xs text-gray-400">dari Rp6.600.000</p>
                    </div>
                    <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden mb-6">
                        <div class="bg-emerald-400 h-full rounded-full" style="width: 45%;"></div>
                    </div>
                </div>
                <button type="button" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3 px-4 rounded-xl transition shadow-lg shadow-emerald-950/20 text-sm">Setor</button>
            </div>

            <div class="bg-[#0b1410]/90 border border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-sm font-semibold text-gray-200">Liburan Bali</h3>
                        <span class="text-xs font-semibold text-gray-400">30%</span>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-white mb-0.5">Rp1.500.000</h2>
                        <p class="text-xs text-gray-400">dari Rp5.000.000</p>
                    </div>
                    <div class="w-full bg-[#142019] h-2 rounded-full overflow-hidden mb-6">
                        <div class="bg-emerald-400 h-full rounded-full" style="width: 30%;"></div>
                    </div>
                </div>
                <button type="button" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3 px-4 rounded-xl transition shadow-lg shadow-emerald-950/20 text-sm">Setor</button>
            </div>

            <div class="bg-[#0b1410]/90 border border-dashed border-gray-800/80 p-6 rounded-2xl shadow-lg backdrop-blur-md flex flex-col items-center justify-center text-center min-h-[220px]">
                <p class="text-xs text-gray-400 leading-relaxed max-w-[200px]">Belum ada target lain.<br>Buat target baru untuk mulai menabung.</p>
            </div>
        </div>
    </main>
</body>

</html>