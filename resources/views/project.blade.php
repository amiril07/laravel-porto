<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="h-full bg-gray-900">

    <main class="min-h-screen bg-slate-900 py-12 md:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach ($projects as $project)
                <div class="w-full bg-gray-800 border border-slate-800 rounded-2xl overflow-hidden shadow-xl transition-all duration-300 hover:shadow-2xl hover:border-slate-700 group flex flex-col justify-between">
                    <div>
                        <div class="w-full h-52 overflow-hidden bg-slate-900">
                            <img src="{{ asset('img/' . $project->image) }}" alt="{{ $project->title }}" 
                                 class="w-full h-full object-cover object-[50%_30%] transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-2xl font-bold text-white tracking-tight group-hover:text-sky-400 transition-colors">
                                {{ $project->title }}
                            </h3>

                            <div class="flex items-center gap-4 text-slate-400">
                                {{-- Ikon Demo Link --}}
                                @if ($project->link)
                                    <a href="{{ $project->link }}" target="_blank" class="hover:text-white transition-colors" title="Lihat Live Demo">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                    </a>
                                @else
                                    <span class="text-slate-600 cursor-not-allowed" title="Link demo tidak tersedia">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                    </span>
                                @endif

                                {{-- Ikon GitHub Link (Baru) --}}
                                @if (isset($project->github) && $project->github)
                                    <a href="{{ $project->github }}" target="_blank" class="hover:text-white transition-colors" title="Lihat Source Code di GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.024A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.293 2.747-1.024 2.747-1.024.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C19.137 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z" />
                                        </svg>
                                    </a>
                                @else
                                    <span class="text-slate-600 cursor-not-allowed" title="Repository GitHub tidak tersedia">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.024A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.293 2.747-1.024 2.747-1.024.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C19.137 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z" />
                                        </svg>
                                    </span>
                                @endif
                            </div>

                            <p class="text-sm text-slate-300 leading-relaxed font-light">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->technologies as $tech)
                                <span class="text-xs font-medium text-slate-300 bg-slate-900/60 border border-slate-700 px-2.5 py-1 rounded-lg">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </main>

    </body>
</x-layout>