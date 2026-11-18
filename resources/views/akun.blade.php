<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun dan Bantuan - Personal Management Finance</title>
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
                <a href="{{ route('tabungan') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Tabungan</a>
                <a href="{{ route('rekap') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-400 hover:text-white hover:bg-[#0e1713] transition">Rekap</a>
                <a href="{{ route('akun') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl bg-[#13221b] text-emerald-400 border border-emerald-500/20 shadow-sm">Akun</a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 p-6 md:p-10 lg:p-12 overflow-y-auto z-10">
        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Akun dan bantuan</h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-7 bg-[#0b1410]/90 border border-gray-800/85 p-6 sm:p-8 rounded-2xl shadow-xl backdrop-blur-md">
                <div class="flex items-center space-x-4 pb-6 mb-6 border-b border-gray-800/60">
                    <div class="w-12 h-12 rounded-full bg-emerald-400 text-gray-950 font-bold flex items-center justify-center text-lg shadow-md">R</div>
                    <div>
                        <h3 class="text-base font-semibold text-gray-100">Rina</h3>
                        <p class="text-xs text-gray-400">rina@email.com</p>
                    </div>
                </div>
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div class="space-y-2">
                        <label for="name" class="block text-xs font-medium text-gray-400">Nama</label>
                        <input type="text" id="name" name="name" value="Rina" required class="w-full bg-[#141e18] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-200 focus:outline-none focus:border-emerald-500 transition">
                    </div>
                    <div class="space-y-2">
                        <label for="new_password" class="block text-xs font-medium text-gray-400">Kata sandi baru</label>
                        <input type="password" id="new_password" name="new_password" placeholder="Minimal 6 karakter" class="w-full bg-[#141e18] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-200 placeholder-gray-600 focus:outline-none focus:border-emerald-500 transition">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-3">
                        <button type="submit" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3 px-4 rounded-xl transition shadow-lg shadow-emerald-950/20 text-sm">Simpan perubahan</button>
                        <a href="{{ route('login') }}" class="w-full bg-transparent hover:bg-rose-950/20 border border-rose-900/40 text-rose-400 font-semibold py-3 px-4 rounded-xl transition text-center text-sm flex items-center justify-center">Keluar</a>
                    </div>
                </form>
            </div>
            <div class="lg:col-span-5 bg-[#0b1410]/90 border border-gray-800/85 p-6 sm:p-8 rounded-2xl shadow-xl backdrop-blur-md">
                <h3 class="text-sm font-semibold text-gray-200 mb-6">Pusat bantuan</h3>
                <div class="space-y-5 text-sm">
                    <div class="pb-4 border-b border-gray-800/60">
                        <p class="font-medium text-gray-200 mb-1">Bagaimana cara mencatat pengeluaran?</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Buka Transaksi, pilih Pengeluaran, isi jumlah dan kategori, lalu simpan.</p>
                    </div>
                    <div class="pb-4 border-b border-gray-800/60">
                        <p class="font-medium text-gray-200 mb-1">Bagaimana cara mulai menabung?</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Buat target di Tabungan, lalu setor setiap kali kamu menabung.</p>
                    </div>
                    <div class="pb-4 border-b border-gray-800/60">
                        <p class="font-medium text-gray-200 mb-1">Apa isi Rekap?</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Total bulanan, rincian per kategori, dan perbandingan enam bulan terakhir.</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-200 mb-1">Di mana data saya disimpan?</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Di perangkat ini. Data tidak ikut pindah ke perangkat lain.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>