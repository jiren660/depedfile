<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | DepEd Zamboanga City</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .animate-fade-in { animation: fadeIn 0.5s ease-out forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex animate-fade-in text-slate-800">

    <aside class="w-80 bg-white border-r border-slate-200 flex flex-col sticky top-0 h-screen overflow-y-auto shadow-sm">
        <div class="p-8 text-center">
            <div class="flex items-center justify-center gap-3 mb-2">
                <img src="{{ asset('images/deped_logo.png') }}" class="h-10 w-auto">
                <h1 class="text-xl font-extrabold tracking-tight italic">DepEd ZC</h1>
            </div>
            <p class="text-[9px] text-slate-400 font-bold tracking-[0.2em] uppercase">Asset Management</p>
        </div>

        <nav class="flex-grow px-4 space-y-6">
            <div class="space-y-1">
                <a href="#" class="flex items-center gap-4 px-6 py-4 bg-red-50 text-[#c00000] rounded-2xl font-bold border border-red-100 transition-all">
                    <span>📊</span> Dashboard
                </a>
            </div>

            <div>
                <p class="px-6 mb-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-blue-600">Legislative District 1</p>
                <div class="space-y-1 px-2">
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-semibold transition-all group">
                        <span class="text-sm">📍 Quadrant 1.1</span>
                        <span class="text-[10px] bg-slate-100 px-2 py-1 rounded-lg group-hover:bg-white transition-colors font-bold text-blue-600">3 Dist.</span>
                    </a>
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-semibold transition-all group">
                        <span class="text-sm">📍 Quadrant 1.2</span>
                        <span class="text-[10px] bg-slate-100 px-2 py-1 rounded-lg group-hover:bg-white transition-colors font-bold text-blue-600">2 Dist.</span>
                    </a>
                </div>
            </div>

            <div>
                <p class="px-6 mb-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-emerald-600">Legislative District 2</p>
                <div class="space-y-1 px-2">
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-semibold transition-all group">
                        <span class="text-sm">📍 Quadrant 2.1</span>
                        <span class="text-[10px] bg-slate-100 px-2 py-1 rounded-lg group-hover:bg-white transition-colors font-bold text-emerald-600">3 Dist.</span>
                    </a>
                    <a href="#" class="flex items-center justify-between px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-xl font-semibold transition-all group">
                        <span class="text-sm">📍 Quadrant 2.2</span>
                        <span class="text-[10px] bg-slate-100 px-2 py-1 rounded-lg group-hover:bg-white transition-colors font-bold text-emerald-600">4 Dist.</span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="p-6 border-t border-slate-100">
            <div class="bg-slate-50 p-4 rounded-3xl flex items-center justify-between border border-slate-100">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="h-10 w-10 bg-[#c00000] rounded-2xl flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-red-100 italic">A</div>
                    <div class="overflow-hidden leading-tight">
                        <p class="text-xs font-bold truncate text-slate-800">{{ auth()->user()->email }}</p>
                        <p class="text-[9px] text-slate-400 font-bold uppercase tracking-widest leading-none">Admin</p>
                    </div>
                </div>
                
                <form action="{{ route('logout') }}" method="POST" class="ml-2">
                    @csrf
                    <button type="submit" class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all" title="Sign Out">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <main class="flex-grow p-10 overflow-y-auto">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Welcome, Admin!</h2>
                <p class="text-slate-500 text-sm mt-1 font-medium italic">Zamboanga City Division Asset Overview</p>
            </div>
            <div class="text-right bg-white px-6 py-3 rounded-2xl shadow-sm border border-slate-100">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest leading-tight">{{ now()->format('l') }}</p>
                <p class="text-lg font-bold text-slate-800 tracking-tight">{{ now()->format('M d, Y') }}</p>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="group bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-default">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-4 bg-blue-50 text-blue-500 rounded-2xl text-2xl group-hover:scale-110 transition-transform">🏢</div>
                    <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest italic">Division Wide</span>
                </div>
                <h3 class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Total System Assets</h3>
                <p class="text-5xl font-extrabold text-slate-800 tracking-tighter leading-none">0</p>
            </div>

            <div class="group bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-50 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-default">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-4 bg-emerald-50 text-emerald-600 rounded-2xl text-2xl group-hover:scale-110 transition-transform">✅</div>
                    <span class="bg-emerald-100 text-emerald-600 px-4 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest italic">Serviceable</span>
                </div>
                <h3 class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Good Condition</h3>
                <p class="text-5xl font-extrabold text-emerald-600 tracking-tighter leading-none">0</p>
            </div>

            <div class="group bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-default">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-4 bg-orange-50 text-orange-500 rounded-2xl text-2xl group-hover:scale-110 transition-transform">⚠️</div>
                    <span class="bg-orange-100 text-orange-600 px-4 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest italic">Unserviceable</span>
                </div>
                <h3 class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Pasira / Damaged</h3>
                <p class="text-5xl font-extrabold text-orange-500 tracking-tighter leading-none">0</p>
            </div>
        </div>

        <div class="flex items-center justify-between mb-8 px-2">
            <h3 class="text-xl font-extrabold text-slate-800 tracking-tight flex items-center gap-3">
                <span class="w-2 h-8 bg-blue-600 rounded-full"></span>
                District Summary Portfolio
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 hover:border-blue-200 transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl font-bold group-hover:scale-110 transition-transform tracking-tighter italic">1.1</div>
                    <div>
                        <h4 class="text-xl font-extrabold text-slate-800">Quadrant 1.1</h4>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest italic leading-tight">LD 1 • 3 Districts</p>
                    </div>
                </div>
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 shadow-inner group-hover:bg-blue-50/30 transition-colors">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-1">Total Quadrant Assets</p>
                    <p class="text-2xl font-extrabold text-slate-800 tracking-tighter leading-none">0</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 hover:border-blue-200 transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl font-bold group-hover:scale-110 transition-transform tracking-tighter italic">1.2</div>
                    <div>
                        <h4 class="text-xl font-extrabold text-slate-800">Quadrant 1.2</h4>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest italic leading-tight">LD 1 • 2 Districts</p>
                    </div>
                </div>
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 shadow-inner group-hover:bg-blue-50/30 transition-colors">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-1">Total Quadrant Assets</p>
                    <p class="text-2xl font-extrabold text-slate-800 tracking-tighter leading-none">0</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="flex items-center gap-4 mb-6 text-emerald-600">
                    <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-xl font-bold group-hover:scale-110 transition-transform tracking-tighter italic">2.1</div>
                    <div class="text-slate-800">
                        <h4 class="text-xl font-extrabold">Quadrant 2.1</h4>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest italic leading-tight">LD 2 • 3 Districts</p>
                    </div>
                </div>
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 shadow-inner group-hover:bg-emerald-50/30 transition-colors">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-1 text-slate-400">Total Quadrant Assets</p>
                    <p class="text-2xl font-extrabold text-slate-800 tracking-tighter leading-none">0</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1 cursor-pointer group">
                <div class="flex items-center gap-4 mb-6 text-emerald-600">
                    <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-xl font-bold group-hover:scale-110 transition-transform tracking-tighter italic">2.2</div>
                    <div class="text-slate-800">
                        <h4 class="text-xl font-extrabold">Quadrant 2.2</h4>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest italic leading-tight">LD 2 • 4 Districts</p>
                    </div>
                </div>
                <div class="bg-slate-50 p-5 rounded-3xl border border-slate-100 shadow-inner group-hover:bg-emerald-50/30 transition-colors">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-1 text-slate-400">Total Quadrant Assets</p>
                    <p class="text-2xl font-extrabold text-slate-800 tracking-tighter leading-none">0</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>