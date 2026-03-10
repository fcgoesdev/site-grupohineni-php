<?php
$pageTitle = "Nossos Clientes";
$clientsData = include 'clients.php';
$clients = $clientsData['clients'];
$categories = $clientsData['categories'];
?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="gradient-blue-purple text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Nossos Clientes</h1>
        <p class="text-xl opacity-90">Conheça as empresas que confiam em nossa expertise</p>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-purple-600 mb-2">50+</div>
                <p class="text-gray-700">Clientes Atendidos</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-purple-600 mb-2">10+</div>
                <p class="text-gray-700">Setores da Economia</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-purple-600 mb-2">100%</div>
                <p class="text-gray-700">Taxa de Retenção</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-purple-600 mb-2">+5</div>
                <p class="text-gray-700">Anos de Parceria</p>
            </div>
        </div>
    </div>
</section>

<!-- Filters Section -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Filtrar por Segmento</h2>
        <div class="flex flex-wrap gap-3 mb-8">
            <button class="filter-btn active px-4 py-2 rounded-lg font-semibold border-2 border-purple-600 bg-purple-600 text-white transition" data-filter="all">
                Todos
            </button>
            <?php foreach ($categories as $key => $label): ?>
            <button class="filter-btn px-4 py-2 rounded-lg font-semibold border-2 border-gray-300 bg-white text-gray-700 hover:border-purple-600 transition" data-filter="<?php echo $key; ?>">
                <?php echo $label; ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Clients Grid -->
<section class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="clientsGrid">
            <?php foreach ($clients as $index => $client): ?>
            <div class="client-card bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition border border-gray-200" data-category="<?php echo $client['category']; ?>" data-featured="<?php echo $client['featured'] ? 'true' : 'false'; ?>">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-blue-100 rounded-lg flex items-center justify-center text-center">
                        <span class="font-bold text-gray-700 text-sm"><?php echo $client['logo']; ?></span>
                    </div>
                    <?php if ($client['featured']): ?>
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold">⭐ Destaque</span>
                    <?php endif; ?>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $client['name']; ?></h3>
                <p class="text-sm text-gray-600 mb-3"><?php echo $categories[$client['category']]; ?></p>
                <p class="text-gray-700 mb-4"><?php echo $client['description']; ?></p>
                <?php if ($client['website']): ?>
                <a href="<?php echo $client['website']; ?>" target="_blank" class="text-purple-600 hover:text-purple-800 font-semibold text-sm">
                    Visitar Website →
                </a>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Depoimentos de Clientes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-200 to-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="font-bold text-gray-700">JM</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">João Martins</h4>
                        <p class="text-sm text-gray-600">CEO, TechCorp Soluções</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"A Hineni transformou completamente nossa presença digital. Conseguimos um ROI de 400% em 6 meses."</p>
                <div class="text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-200 to-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="font-bold text-gray-700">MF</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Maria Fernandes</h4>
                        <p class="text-sm text-gray-600">Diretora, E-Commerce Plus</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"Profissionais altamente qualificados. A segurança do nosso e-commerce melhorou drasticamente."</p>
                <div class="text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-200 to-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="font-bold text-gray-700">RP</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Roberto Pereira</h4>
                        <p class="text-sm text-gray-600">Gerente, FinanceX Investimentos</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"Implementação de testes de penetração impecável. Muito satisfeito com a consultoria em segurança."</p>
                <div class="text-yellow-400 mt-4">⭐⭐⭐⭐⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="gradient-blue-purple text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Você Também Pode Fazer Parte da Nossa Comunidade</h2>
        <p class="text-xl mb-8 opacity-90">Junte-se a mais de 50 empresas que já transformaram seus negócios com a Grupo Hineni.</p>
        <a href="/contato.php" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition inline-block">
            Comece Agora
        </a>
    </div>
</section>

<script>
// Simple filter functionality
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const filter = this.dataset.filter;

        // Update active button
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('active', 'bg-purple-600', 'border-purple-600', 'text-white');
            b.classList.add('border-gray-300', 'bg-white', 'text-gray-700');
        });
        this.classList.add('active', 'bg-purple-600', 'border-purple-600', 'text-white');
        this.classList.remove('border-gray-300', 'bg-white', 'text-gray-700');

        // Filter cards
        document.querySelectorAll('.client-card').forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Sort featured clients first on load
const grid = document.getElementById('clientsGrid');
const cards = Array.from(grid.querySelectorAll('.client-card'));
cards.sort((a, b) => {
    const aFeatured = a.dataset.featured === 'true' ? 0 : 1;
    const bFeatured = b.dataset.featured === 'true' ? 0 : 1;
    return aFeatured - bFeatured;
});
cards.forEach(card => grid.appendChild(card));
</script>

<?php include 'includes/footer.php'; ?>
