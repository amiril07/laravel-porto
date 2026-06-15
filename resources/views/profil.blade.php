<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="h-full bg-gray-900">

    <main class="min-h-screen bg-slate-900 py-12 md:py-20 flex items-center">
        <div class="w-full max-w-5xl mx-auto px-6">
            
            <div class="bg-slate-800/40 border border-slate-700/50 rounded-3xl p-8 md:p-12 shadow-2xl backdrop-blur-sm">
                <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-12 md:gap-16">
                    
                    <div class="w-full md:w-3/5 text-center md:text-left space-y-6">
                        <div>
                            <h1 class="text-4xl md:text-5xl font-black text-slate-50 tracking-tight">
                                Hi!, I'm <span class="text-sky-500">{{ $profile->nama }}</span>
                            </h1>
                            <p class="text-lg md:text-xl font-semibold text-slate-400 mt-2">
                                {{ $profile->bio }}
                            </p>
                        </div>

                        <div class="pl-4 space-y-3 text-slate-300 text-base md:text-lg border-l-2 border-sky-500/50 text-left">
                            <p class="font-medium">
                                <span class="text-slate-400 font-normal inline-block w-20">Email</span> : {{ $profile->email }}
                            </p>
                            <p class="font-medium">
                                <span class="text-slate-400 font-normal inline-block w-20">Phone</span> : {{ $profile->phone }}
                            </p>
                            <p class="font-medium">
                                <span class="text-slate-400 font-normal inline-block w-20">Address</span> : {{ $profile->address }}
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-2/5 flex justify-center md:justify-end">
                        <div class="relative group">
                            <img src="img/{{ $profile->avatar }}" alt="Foto Profil" class="relative w-64 h-64 md:w-72 md:h-72 object-cover rounded-2xl border border-slate-600/30 shadow-lg">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
    </body>
</x-layout>