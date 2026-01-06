<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Art Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #050505; color: #fff; overflow-x: hidden; }
        .glow-text { text-shadow: 0 0 10px rgba(0, 255, 255, 0.7); }
        .card { 
            background: rgba(255, 255, 255, 0.05); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255, 255, 255, 0.1); 
            transition: transform 0.3s, box-shadow 0.3s; 
        }
        .card:hover { 
            transform: translateY(-5px) scale(1.02); 
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2); 
            border-color: rgba(0, 255, 255, 0.5); 
        }
        .bg-grid {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;
            background-image: radial-gradient(circle at center, rgba(0, 255, 255, 0.1) 0%, transparent 60%);
        }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-black">
    <div class="bg-grid"></div>

    <nav class="fixed top-0 w-full z-50 bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <h1 class="text-2xl font-bold tracking-[0.2em] text-cyan-400">ART<span class="text-white">NOVA</span></h1>
            
            <a href="{{ route('admin.login') }}" class="text-xs uppercase tracking-widest text-gray-500 hover:text-cyan-400 transition">
                Admin Access
            </a>
        </div>
    </nav>

    <main class="pt-32 pb-20 px-6 max-w-7xl mx-auto">
        <header class="text-center mb-20">
            <h2 class="text-5xl md:text-7xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500">
                DIGITAL <span class="text-cyan-400 glow-text">REALITY</span>
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg font-light">
                Explore a curation of visual experiences redefining the boundaries of modern art.
            </p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($posters as $poster)
            <article class="card rounded-2xl overflow-hidden group relative">
                <div class="h-96 overflow-hidden">
                    <img src="{{ $poster->image }}" 
                         alt="{{ $poster->title }}" 
                         class="w-full h-full object-cover transition duration-700 group-hover:scale-110 group-hover:rotate-1">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                
                <div class="absolute bottom-0 left-0 p-6 w-full transform translate-y-2 group-hover:translate-y-0 transition">
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest mb-1 block">
                        {{ $poster->category }}
                    </span>
                    <h3 class="text-2xl font-bold text-white mb-2 leading-tight">
                        {{ $poster->title }}
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
    </main>
    
    <footer class="border-t border-white/10 py-12 text-center text-gray-600 text-sm">
        <p>&copy; {{ date('Y') }} ARTNOVA. Designed for the Future.</p>
    </footer>
</body>
</html>