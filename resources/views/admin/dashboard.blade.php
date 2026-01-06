<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Core</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #050505;
            color: #e0e0e0;
        }
        .sidebar {
            background: rgba(10, 10, 15, 0.95);
            border-right: 1px solid rgba(0, 255, 255, 0.1);
        }
        .glass-header {
            background: rgba(5, 5, 5, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .nav-link {
            transition: all 0.2s;
            border-left: 2px solid transparent;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(0, 255, 255, 0.05);
            border-left-color: #00ffff;
            color: #00ffff;
        }
        .btn-action {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.3s;
        }
        .btn-edit {
            background: rgba(255, 255, 0, 0.1);
            color: #ffff00;
            border: 1px solid rgba(255, 255, 0, 0.3);
        }
        .btn-edit:hover { background: rgba(255, 255, 0, 0.2); }
        .btn-delete {
            background: rgba(255, 0, 0, 0.1);
            color: #ff4444;
            border: 1px solid rgba(255, 0, 0, 0.3);
        }
        .btn-delete:hover { background: rgba(255, 0, 0, 0.2); }
        .table-row { transition: background 0.2s; }
        .table-row:hover { background: rgba(255, 255, 255, 0.02); }
    </style>
</head>
<body class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="w-64 sidebar flex flex-col justify-between hidden md:flex">
        <div>
            <div class="h-16 flex items-center justify-center border-b border-gray-800">
                <span class="text-xl font-bold tracking-widest text-cyan-400">NEXUS<span class="text-white">CORE</span></span>
            </div>
            <nav class="mt-8 px-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active block py-3 px-4 text-sm font-medium text-gray-300 rounded-r hover:text-white">
                    Dashboard
                </a>
                <a href="{{ route('home') }}" target="_blank" class="nav-link block py-3 px-4 text-sm font-medium text-gray-300 rounded-r hover:text-white">
                    View Public Site
                </a>
            </nav>
        </div>
        <div class="p-4 border-t border-gray-800">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full py-2 text-xs text-center text-red-400 border border-red-900/50 rounded hover:bg-red-900/20 transition">
                    TERMINATE SESSION
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="h-16 glass-header flex items-center justify-between px-6 z-10">
            <h2 class="text-lg font-semibold text-gray-200">Poster Management</h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-500">Admin: {{ Auth::user()->name }}</span>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-black p-6">
            <div class="max-w-7xl mx-auto">
                
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-900/20 border-l-4 border-green-500 text-green-300">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-100">Gallery Assets</h3>
                    <a href="{{ route('admin.posters.create') }}" class="px-6 py-2 bg-cyan-600 hover:bg-cyan-500 text-black font-bold rounded shadow-[0_0_15px_rgba(6,182,212,0.5)] transition">
                        + NEW UPLOAD
                    </a>
                </div>

                <div class="bg-[#0a0a0a] border border-gray-800 rounded-lg overflow-hidden relative">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-purple-500"></div>
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-[#111] text-gray-400 text-xs uppercase tracking-wider border-b border-gray-800">
                                <th class="p-4">Visual</th>
                                <th class="p-4">Title</th>
                                <th class="p-4">Category</th>
                                <th class="p-4">Last Update</th>
                                <th class="p-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 text-sm text-gray-300">
                            @foreach ($posters as $poster)
                            <tr class="table-row">
                                <td class="p-4">
                                    <div class="w-16 h-20 overflow-hidden rounded border border-gray-700">
                                        <img src="{{ $poster->image }}" alt="{{ $poster->title }}" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="p-4 font-medium text-white">{{ $poster->title }}</td>
                                <td class="p-4 text-gray-500">{{ $poster->category }}</td>
                                <td class="p-4 text-xs font-mono text-gray-600">{{ $poster->updated_at->diffForHumans() }}</td>
                                <td class="p-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.posters.edit', $poster) }}" class="btn-action btn-edit">EDIT</a>
                                        <form action="{{ route('admin.posters.destroy', $poster) }}" method="POST" onsubmit="return confirm('Confirm deletion of asset?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action btn-delete">DEL</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $posters->links() }}
                </div>
            </div>
        </main>
    </div>
</body>
</html>
