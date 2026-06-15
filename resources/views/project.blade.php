<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

  <body class="h-full bg-gray-900">

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="max-w-sm w-full bg-gray-800 border border-slate-800 rounded-2xl overflow-hidden shadow-xl transition-all duration-300 hover:shadow-2xl hover:border-slate-700 group">
    
    <div class="w-full h-52 overflow-hidden bg-slate-900">
        <img src="img/damat.jpeg" alt="Damat" 
             class="w-full h-full object-cover object-[50%_30%] transition-transform duration-500 group-hover:scale-105">
    </div>

    <div class="p-6 space-y-4">
        
        <h3 class="text-3xl font-bold text-white tracking-tight">
            Damat Mobile App
        </h3>

        <div class="flex items-center gap-4 text-slate-400">
            <a href="https://amiril.yopaaa.xyz/damat/pages/dashboard.php" target="_blank" class="hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </div>

        <p class="text-sm md:text-base text-slate-300 leading-relaxed font-light">
            Damat (Dana Cermat) is a web-based personal financial recording application designed to help users track net balances, manage monthly budgets, and monitor daily cash flow through interactive graphic visualizations.
        </p>

        <div class="flex flex-wrap gap-3 pt-2">
            <span class="text-xs font-medium text-slate-300 bg-slate-900/60 border border-slate-1000/50 px-3 py-1.5 rounded-lg">PHP</span>
            <span class="text-xs font-medium text-slate-300 bg-slate-900/60 border border-slate-1000/50 px-3 py-1.5 rounded-lg">Javascript</span>
            <span class="text-xs font-medium text-slate-300 bg-slate-900/60 border border-slate-1000/50 px-3 py-1.5 rounded-lg">Chart.js</span>
            <span class="text-xs font-medium text-slate-300 bg-slate-900/60 border border-slate-1000/50 px-3 py-1.5 rounded-lg">MySQL</span>
        </div>

    </div>
</div>
  </main>

  </body>

</x-layout>
  