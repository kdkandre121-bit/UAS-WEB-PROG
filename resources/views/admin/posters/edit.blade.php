<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Asset - Admin Core</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #050505; color: #e0e0e0; }
        .input-field { background: rgba(255, 255, 255, 0.05); border: 1px solid #333; color: white; }
        .input-field:focus { border-color: #00ffff; outline: none; box-shadow: 0 0 5px rgba(0,255,255,0.3); }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-black p-4">
    <div class="w-full max-w-lg bg-[#0a0a0a] rounded-xl border border-gray-800 p-8 shadow-2xl">
        <div class="flex justify-between items-center mb-8 border-b border-gray-800 pb-4">
            <h1 class="text-xl font-bold text-yellow-500">Modify Data Block: #{{ $poster->id }}</h1>
            <a href="{{ route('admin.dashboard') }}" class="text-xs text-gray-500 hover:text-white uppercase tracking-wider">Cancel</a>
        </div>

        <form action="{{ route('admin.posters.update', $poster) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-xs uppercase text-gray-500 mb-2">Asset Title</label>
                <input type="text" name="title" value="{{ $poster->title }}" required class="w-full p-3 rounded input-field">
            </div>
            
            <div>
                <label class="block text-xs uppercase text-gray-500 mb-2">Category Tag</label>
                <input type="text" name="category" value="{{ $poster->category }}" required class="w-full p-3 rounded input-field">
            </div>

            <div>
                <label class="block text-xs uppercase text-gray-500 mb-2">Visual Data Source (URL)</label>
                <div class="flex gap-4 mb-2">
                    <img src="{{ $poster->image }}" class="h-20 w-20 object-cover rounded border border-gray-700">
                </div>
                <input type="url" name="image" value="{{ $poster->image }}" required class="w-full p-3 rounded input-field">
            </div>

            <button type="submit" class="w-full py-4 bg-gradient-to-r from-yellow-600 to-orange-600 hover:from-yellow-500 hover:to-orange-500 text-white font-bold rounded shadow-lg transform hover:-translate-y-1 transition text-sm uppercase tracking-widest">
                Commit Changes
            </button>
        </form>
    </div>
</body>
</html>
