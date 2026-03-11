<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="text-4xl text-black font-semibold mt-20">
        Berita Utama
    </div>
    {{-- search start --}}
    @if(request('kategori'))
    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
    @endif
    @if(request('author'))
    <input type="hidden" name="author" value="{{ request('author') }}">
    @endif
    <form action="/berita" method="GET" class="flex justify-end">
        <div class="join">
            <div>
                <label class="input validator join-item">
                    <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"
                            fill="none" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor"
                            stroke-width="2" />
                    </svg>
                    <input type="search" name="search" placeholder="prestasi smk 1 embalut" required />
                </label>
                <div class="validator-hint hidden">cari berita seputar embalut</div>
            </div>
            <button class="btn btn-neutral join-item" type="submit">Cari berita</button>
        </div>
    </form>
    {{-- search end --}}

    <section class="grid  md:grid-cols-3 gap-8 mt-12">

        @foreach ($mainposts as $mainpost)
            <article class="max-w-sm mb-20">
                <div class="rounded-sm relative">
                    <div class="w-full h-92 overflow-hidden rounded-md">
                        <img src="{{ asset('images/' . $mainpost->gambar) }}" alt="kegiatan berbagi"
                            class="w-full h-full rounded-md hover:scale-110 transition-transform duration-500 brightness-75">
                    </div>
                    <div class="absolute bottom-0 left-0 p-4 text-white">
                        <h2 class="font-semibold text-sm leading-tight hover:underline">
                            <a href="/berita/{{ $mainpost->slug }}">
                                {{ $mainpost->title }}
                            </a>
                        </h2>
                    </div>
                </div>
            </article>
        @endforeach

    </section>
                @if(method_exists($mainposts, 'links'))
    {{ $mainposts->links() }}
@endif
    {{-- berita tefbaru --}}
    @if ($secondposts->isNotEmpty())

        <div class="text-2xl text-black font-bold mt-22">
            Berita Terbaru
        </div>
        <section class="grid  md:grid-cols-4 gap-8 mt-12">
            @foreach ($secondposts as $secondpost)
                <article class="max-w-68 min-w-68 max-h-40 min-h-40 mb-20">
                    <div class="rounded-xl p-2">
                        <div class="w-64 h-48 border-4 border-white overflow-hidden rounded-xl">
                            <img src="{{ asset('images/' . $secondpost->gambar) }}" alt="kegiatan berbagi"
                                class="rounded-xl hover:scale-110 transition-transform duration-500 ">
                        </div>
                        <div class="p-1">
                            <h2 class="font-bold text-sm cursor-pointer hover:underline">
                                <a href="/berita/{{ $secondpost->slug }}">
                                    {{ $secondpost->title }}
                                </a>
                            </h2>

                            <div class="text-sm text-black font-extralight text-right mt-2">
                                {{ $secondpost->published_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>
    @endif
</x-layout>
