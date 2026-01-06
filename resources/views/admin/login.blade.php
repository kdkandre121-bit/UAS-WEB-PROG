<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Futuristic Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #050505;
            color: #e0e0e0;
            overflow: hidden;
        }
        .neon-glow {
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5), 0 0 20px rgba(0, 255, 255, 0.3);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .input-field {
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid #333;
            transition: all 0.3s ease;
        }
        .input-field:focus {
            border-color: #00ffff;
            box-shadow: 0 0 8px rgba(0, 255, 255, 0.3);
            outline: none;
        }
        .btn-neon {
            background: transparent;
            border: 1px solid #00ffff;
            color: #00ffff;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .btn-neon:hover {
            background: #00ffff;
            color: #000;
            box-shadow: 0 0 15px #00ffff;
        }
        /* Background Animation */
        .bg-grid {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: linear-gradient(rgba(0, 255, 255, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: -1;
            perspective: 500px;
            transform: rotateX(60deg) scale(2);
            animation: gridMove 20s linear infinite;
        }
        @keyframes gridMove {
            0% { background-position: 0 0; }
            100% { background-position: 0 500px; }
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen relative">
    <div class="bg-grid"></div>

    <div class="w-full max-w-md p-8 glass-panel rounded-2xl shadow-2xl relative z-10">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold tracking-widest text-cyan-400 uppercase">Admin Access</h1>
            <p class="text-sm text-gray-400 mt-2">Identify yourself, human.</p>
        </div>
        
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-900/30 border border-red-500/50 text-red-200 text-sm rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-xs uppercase tracking-wide text-gray-500 mb-1">Email Command</label>
                <input type="email" name="email" id="email" required 
                    class="w-full p-3 rounded input-field text-white placeholder-gray-600"
                    placeholder="admin@system.core">
            </div>
            <div>
                <label for="password" class="block text-xs uppercase tracking-wide text-gray-500 mb-1">Security Key</label>
                <input type="password" name="password" id="password" required 
                    class="w-full p-3 rounded input-field text-white placeholder-gray-600"
                    placeholder="••••••••">
            </div>
            <button type="submit" class="w-full py-3 mt-4 rounded font-bold btn-neon">
                Initialize Session
            </button>
        </form>
    </div>
</body>
</html>
