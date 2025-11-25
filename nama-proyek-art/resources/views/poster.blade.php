<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster Art Gallery</title>

    {{-- Panggil file CSS dari Vite. Pastikan file resources/css/app.css ada. --}}
    @vite('resources/css/app.css')
</head>

<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- PASTIKAN resources/js/app.js dipanggil --}}
    </head>
    
    <body class="bg-gray-100 font-sans">
        <header class="text-center py-10 bg-white shadow-sm">
            <h1 class="text-4xl font-extrabold text-gray-800">Poster Art Gallery</h1>
            <p class="text-gray-600 mt-2"></p>
        </header>
    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($posters as $poster)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                    
                    {{-- Ganti div dengan tombol atau link yang memiliki event klik --}}
                    <button 
                        class="w-full h-64 overflow-hidden focus:outline-none"
                        onclick="showModal('{{ asset($poster['image']) }}', '{{ $poster['title'] }}')"
                        type="button"
                    >
                        <img src="{{ asset($poster['image']) }}" 
                            alt="{{ $poster['title'] }}" 
                            class="w-full h-full object-cover">
                    </button>

                    <div class="p-5 text-center">
                        <h2 class="text-xl font-bold text-gray-900 mb-1 truncate">{{ $poster['title'] }}</h2>
                        <p class="text-sm text-indigo-600 font-medium bg-indigo-50 inline-block px-3 py-1 rounded-full">{{ $poster['category'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <div id="image-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" onclick="hideModal()">
        
        <div class="relative max-w-5xl max-h-full" onclick="event.stopPropagation()">
            {{-- Tombol Tutup --}}
            <button 
                class="absolute top-4 right-4 text-white text-3xl font-bold opacity-70 hover:opacity-100 transition duration-150 focus:outline-none"
                onclick="hideModal()"
                aria-label="Tutup"
            >
                &times;
            </button>

            {{-- Gambar Penuh --}}
            <img id="modal-image-content" src="" alt="" class="max-w-full max-h-[90vh] rounded-lg shadow-2xl">
            
            {{-- Keterangan Gambar --}}
            <p id="modal-image-caption" class="text-white text-center mt-3 text-lg font-semibold"></p>
        </div>

    </div>

    </body>
</html>