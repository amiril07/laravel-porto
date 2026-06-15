<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="h-full bg-gray-900">

    <main class="min-h-screen bg-slate-900 py-12 md:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

            {{-- List Artikel Blog --}}
            <div class="space-y-8">
                @foreach ($posts as $post)
                    <article class="group relative flex flex-col justify-between rounded-2xl border border-slate-800 bg-slate-800/30 p-6 shadow-xl backdrop-blur-sm transition-all duration-300 hover:border-slate-700/70 hover:shadow-2xl">
                        
                        <div class="space-y-3">
                            {{-- Judul Blog --}}
                            <a href="/blog/{{ $post['slug'] }}" class="inline-block">
                                <h2 class="text-2xl font-bold text-slate-100 tracking-tight transition-colors group-hover:text-sky-400 md:text-3xl">
                                    {{ $post['title'] }}
                                </h2>
                            </a>

                            {{-- Metadata Blog (Author, Category & Tanggal) --}}
                            <div class="flex items-center gap-3 text-xs md:text-sm text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <a href="#" class="font-medium text-slate-300 hover:text-white transition-colors">
                                        {{ $post['author'] }}
                                    </a>
                                </div>
                                <span class="text-slate-600">•</span>
                                <div class="flex items-center">
                                    <span class="rounded-md bg-sky-500/10 px-2 py-1 text-xs font-medium text-sky-400 ring-1 ring-inset ring-sky-500/20">
                                        {{ $post['category'] }}
                                    </span>
                                </div>
                                <span class="text-slate-600">•</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-slate-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <span>{{ \Carbon\Carbon::parse($post['published_at'])->format('d F Y') }}</span>
                                </div>
                            </div>

                            {{-- Cuplikan Isi Konten --}}
                            <p class="text-sm md:text-base text-slate-300 leading-relaxed font-light">
                                {{ Str::limit($post['body'], 160) }}
                            </p>
                        </div>

                        {{-- Tombol Read More --}}
                        <div class="mt-4 pt-2 border-t border-slate-800/60 flex justify-end">
                            <a href="/blog/{{ $post['slug'] }}" class="inline-flex items-center gap-1 text-sm font-semibold text-sky-500 transition-colors group-hover:text-sky-400 hover:underline">
                                Read more 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>

                    </article>
                @endforeach
            </div>

        </div>
    </main>

    </body>
</x-layout>