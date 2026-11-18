<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Personal Management Finance</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#050f0a] text-white min-h-screen flex items-center justify-center relative overflow-x-hidden font-sans p-4 sm:p-6 md:p-8">
    <div class="absolute -top-20 -left-20 w-64 h-64 sm:w-96 sm:h-96 bg-emerald-950/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 -right-20 w-72 h-72 sm:w-[500px] sm:h-[500px] bg-emerald-900/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-2 sm:px-6 lg:px-24 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10 w-full max-w-6xl">
        <div class="lg:col-span-7 space-y-4 sm:space-y-6 text-center lg:text-left">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight leading-tight">
                Personal <br class="hidden sm:inline"> Management <br> Finance
            </h1>
            <p class="text-gray-400 text-sm sm:text-base md:text-lg max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Catat pemasukan dan pengeluaran harian, sisihkan tabungan, dan lihat rekap keuanganmu di satu tempat.
            </p>
        </div>

        <div class="lg:col-span-5 flex justify-center w-full">
            <div class="w-full max-w-md bg-[#0e1612]/90 backdrop-blur-md border border-gray-800/80 p-6 sm:p-8 rounded-2xl sm:rounded-3xl shadow-2xl">
                <div class="flex bg-[#16221b] p-1.5 rounded-2xl mb-6 sm:mb-8 border border-gray-800/50">
                    <button type="button" class="w-1/2 py-2.5 text-sm font-medium bg-[#1e2d25] text-white rounded-xl shadow-md transition">Masuk</button>
                    <button type="button" class="w-1/2 py-2.5 text-sm font-medium text-gray-400 hover:text-white transition">Daftar</button>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-4 sm:space-y-5">
                    @csrf
                    <div class="space-y-1.5 sm:space-y-2">
                        <label for="email" class="block text-xs font-medium text-gray-400">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full bg-[#141e18] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-200 placeholder-gray-600 focus:outline-none focus:border-emerald-500 transition"
                            placeholder="nama@email.com">
                    </div>
                    <div class="space-y-1.5 sm:space-y-2">
                        <label for="password" class="block text-xs font-medium text-gray-400">Kata sandi</label>
                        <input type="password" id="password" name="password" required
                            class="w-full bg-[#141e18] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-200 placeholder-gray-600 focus:outline-none focus:border-emerald-500 transition"
                            placeholder="Minimal 6 karakter">
                    </div>
                    <div class="pt-2 sm:pt-3">
                        <button type="submit" class="w-full bg-[#86efac] hover:bg-[#74dc99] text-gray-950 font-semibold py-3.5 px-4 rounded-xl transition shadow-lg shadow-emerald-950/20">
                            Masuk
                        </button>
                    </div>
                </form>


                <p class="mt-5 text-center text-xs text-gray-400">
                    Butuh bantuan? <a href="#" class="text-[#86efac] hover:text-[#74dc99] font-medium hover:underline transition">Buka pusat bantuan</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>