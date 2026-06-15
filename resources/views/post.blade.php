<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="h-full bg-gray-900">

    <main class="min-h-screen bg-slate-900 py-12 md:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            
            {{-- Tombol Kembali --}}
            <div class="mb-8">
                <a href="/blog" class="inline-flex items-center gap-2 text-sm font-semibold text-sky-500 transition-colors hover:text-sky-400 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:-translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Back to blogs
                </a>
            </div>

            {{-- Artikel Utama --}}
            <article class="rounded-2xl border border-slate-800 bg-slate-800/30 p-6 md:p-10 shadow-2xl backdrop-blur-sm">
                
                {{-- Bagian Judul Utama --}}
                <header class="space-y-4 border-b border-slate-800 pb-6 mb-6">
                    <h1 class="text-3xl font-extrabold text-slate-100 tracking-tight md:text-4xl lg:text-5xl leading-tight">
                        {{ $post['title'] }}
                    </h1>

                    {{-- Metadata Info Penulis, Category & Tanggal --}}
                    <div class="flex items-center gap-3 text-xs md:text-sm text-slate-400">
                        <div class="flex items-center gap-1.5">
                            <div class="h-6 w-6 rounded-full bg-slate-700 flex items-center justify-center text-[10px] font-bold text-sky-400 border border-slate-600/50">
                                {{ strtoupper(substr($post['author'], 0, 1)) }}
                            </div>
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
                </header>

                {{-- Isi Konten Utama --}}
                <div class="text-slate-300 text-base md:text-lg leading-relaxed font-light text-justify space-y-4">
                    <p>
                        {!! nl2br(e($post['body'])) !!}
                    </p>
                </div>

            </article>

        </div>
    </main>
</body>
</x-layout>