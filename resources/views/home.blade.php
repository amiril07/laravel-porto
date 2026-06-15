<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="h-full bg-gray-900">

    <main class="h-full bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-400 tracking-tight">
                    Welcome to Homepage
                </h1>
            </div>

            <div class="flex flex-col-reverse md:flex-row items-center justify-center gap-12">
                <div class="w-full md:w-3/5 space-y-6 text-center">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-3 flex-wrap">
                        <span class="text-2xl md:text-3xl font-black text-white">Perkenalkan nama saya</span>
                        <h2 class="text-2xl md:text-3xl font-black bg-sky-900 text-white px-4 py-2 rounded-md shadow-md">
                            Muhammad Amiril Mukminin Azzaky
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </main>
    </body>
</x-layout>