<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="max-w-4xl mx-auto px-4 mt-12 mb-20">
        
        {{-- Breadcrumb / Back Button --}}
        <div class="mb-6">
            <a href="/posts" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali ke Berita
            </a>
        </div>

        <article>

            {{-- Article Header --}}
            <header class="mb-8">
                <h1 class="font-semibold text-3xl md:text-4xl lg:text-5xl text-gray-900 leading-tight mb-4">
                    {{ $post['title'] }}
                </h1>
                
                <div class="flex items-center text-gray-600 text-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <time datetime="{{ $post['tanggal'] }}">{{ $post['tanggal'] }}</time>
                </div>
            </header>

            {{-- Featured Image --}}
            <figure class="mb-8">
                <div class="w-full max-w-5xl overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('images/' . $post['gambar']) }}" 
                         alt="{{ $post['title'] }}"
                         class="w-full h-140 object-cover">
                        </div>
                    </figure>
            <section class="max-w-4xl mx-auto">
                <p class="text-gray-400">{{ $post['title'] }}</p>
                <div class="prose prose-lg max-w-none">
                    {!! nl2br(e($post['body'])) !!}
                </div>
            </section>
        </article>
            

        {{-- Related Articles (Optional) --}}
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-2xl font-bold mb-6">Berita Terkait</h3>
            {{-- Bisa tambahin related posts di sini --}}
        </div>

    </section>
</x-layout>
