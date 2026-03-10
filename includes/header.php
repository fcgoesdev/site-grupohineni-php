<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Grupo Hineni' : 'Grupo Hineni'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; }
        .gradient-blue-purple { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-pink-orange { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .hero-title { font-size: 3.5rem; font-weight: 800; line-height: 1.2; }
        @media (max-width: 768px) { .hero-title { font-size: 2.5rem; } }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="sticky top-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="font-bold text-2xl text-gray-900">Grupo Hineni</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-purple-600 transition">Home</a>
                    <a href="/quem-somos.php" class="text-gray-700 hover:text-purple-600 transition">Quem Somos</a>
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-purple-600 transition">Serviços</button>
                        <div class="hidden group-hover:block absolute left-0 mt-0 w-48 bg-white shadow-lg rounded-lg py-2">
                            <a href="/hineni-digital.php" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 transition">Hineni Digital</a>
                            <a href="/hineni-cybersecurity.php" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 transition">Hineni Cybersecurity</a>
                        </div>
                    </div>
                    <a href="/nossos-clientes.php" class="text-gray-700 hover:text-purple-600 transition">Clientes</a>
                    <a href="/contato.php" class="text-gray-700 hover:text-purple-600 transition">Contato</a>
                </div>
                <button class="md:hidden" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <a href="/" class="block py-2 text-gray-700 hover:text-purple-600">Home</a>
                <a href="/quem-somos.php" class="block py-2 text-gray-700 hover:text-purple-600">Quem Somos</a>
                <a href="/hineni-digital.php" class="block py-2 text-gray-700 hover:text-purple-600">Hineni Digital</a>
                <a href="/hineni-cybersecurity.php" class="block py-2 text-gray-700 hover:text-purple-600">Hineni Cybersecurity</a>
                <a href="/nossos-clientes.php" class="block py-2 text-gray-700 hover:text-purple-600">Clientes</a>
                <a href="/contato.php" class="block py-2 text-gray-700 hover:text-purple-600">Contato</a>
            </div>
        </div>
    </nav>
