<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="text-4xl text-black font-semibold mt-20">
        Berita Utama
    </div>
    <section class="grid  md:grid-cols-3 gap-8 mt-12">
        @foreach ($posts as $post)
            
        <article class="max-w-sm mb-20">
            <div class="rounded-sm relative">
                <div class="w-full h-92 overflow-hidden rounded-md">
                    <img src="{{ asset('images/' . $post['gambar']  ) }}" alt="kegiatan berbagi"
                        class="w-full h-full rounded-md hover:scale-110 transition-transform duration-500 brightness-75">
                </div>
                <div class="absolute bottom-0 left-0 p-4 text-white">
                    <h2 class="font-semibold text-sm leading-tight hover:underline">
                        <a href="/posts/{{ $post['id'] }}">
                            {{ $post['title'] }}
                        </a>
                    </h2>
                </div>
            </div>
        </article>
        @endforeach
 
    </section>
    {{-- berita tefbaru --}}
    <div class="text-2xl text-black font-bold mt-22">
        Berita Terbaru
    </div>
    <section class="grid  md:grid-cols-4 gap-8 mt-12">
        @foreach ($news as $new)
            
        <article class="max-w-68 min-w-68 max-h-40 min-h-40 mb-20">
            <div class="rounded-xl">
                <div class="w-64 h-48 border-4 border-white overflow-hidden rounded-xl">
                    <img src="{{ asset('images/'. $new['gambar'] )}}" alt="kegiatan berbagi"
                    class="rounded-xl hover:scale-110 transition-transform duration-500 ">
                </div>
                <div class="p-1">
                    <h2 class="font-bold text-sm cursor-pointer hover:underline">
                        <a href="/posts/{{ $new['id'] }}">
                            
                            {{ $new['title'] }}
                        </a>
                    </h2>
                    <div class="text-sm text-black font-bold text-right mt-2">
                        {{ $new['tanggal'] }}
                    </div>
                </div>
            </div>
        </article>
        @endforeach

    </section>
</x-layout>
