<?php $pageTitle = "Home"; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="gradient-blue-purple text-white py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="hero-title mb-6">Grupo Hineni</h1>
        <p class="text-xl md:text-2xl mb-8 opacity-90">Transformando negócios através de tecnologia e segurança digital</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#servicos" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Conhecer Serviços
            </a>
            <a href="/contato.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">
                Entrar em Contato
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">50+</div>
                <p class="text-gray-700">Projetos Entregues</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">100%</div>
                <p class="text-gray-700">Taxa de Satisfação</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">24/7</div>
                <p class="text-gray-700">Suporte Disponível</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">5+</div>
                <p class="text-gray-700">Anos de Experiência</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="servicos" class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-gray-900">Nossas Áreas de Especialidade</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <style>
                .gradient-purple { background: linear-gradient(135deg, #63079C 0%, #8B5CF6 100%); }
                .gradient-security { background: linear-gradient(135deg, #003D82 0%, #1A5F7A 100%); }
            </style>
            <!-- Hineni Digital -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-8 border-2 border-purple-200 hover:shadow-lg transition">
                <div class="gradient-purple text-white rounded-lg p-4 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hineni Digital</h3>
                <p class="text-gray-700 mb-6">Gerenciamento completo de redes sociais, criação de conteúdo visual e estratégias de publicidade digital para impulsionar seu negócio online.</p>
                <ul class="space-y-2 text-sm text-gray-700 mb-6">
                    <li class="flex items-center"><span class="text-purple-600 mr-2">✓</span> Gestão de Redes Sociais</li>
                    <li class="flex items-center"><span class="text-purple-600 mr-2">✓</span> Criação de Conteúdo Visual</li>
                    <li class="flex items-center"><span class="text-purple-600 mr-2">✓</span> Publicidade Digital</li>
                    <li class="flex items-center"><span class="text-purple-600 mr-2">✓</span> Estratégia de Social Media</li>
                </ul>
                <a href="/hineni-digital.php" class="gradient-purple text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition inline-block">
                    Saiba Mais
                </a>
            </div>

            <!-- Hineni Cybersecurity -->
            <div class="bg-gradient-to-br from-blue-50 to-slate-50 rounded-lg p-8 border-2 border-blue-200 hover:shadow-lg transition">
                <div class="gradient-security text-white rounded-lg p-4 w-12 h-12 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hineni Cybersecurity</h3>
                <p class="text-gray-700 mb-6">Proteção completa contra ameaças cibernéticas com testes de penetração, análise de vulnerabilidades, desenvolvimento web seguro e consultoria.</p>
                <ul class="space-y-2 text-sm text-gray-700 mb-6">
                    <li class="flex items-center"><span class="text-blue-700 mr-2">✓</span> Testes de Penetração</li>
                    <li class="flex items-center"><span class="text-blue-700 mr-2">✓</span> Análise de Vulnerabilidades</li>
                    <li class="flex items-center"><span class="text-blue-700 mr-2">✓</span> Desenvolvimento Web Seguro</li>
                    <li class="flex items-center"><span class="text-blue-700 mr-2">✓</span> Consultoria em Segurança</li>
                </ul>
                <a href="/hineni-cybersecurity.php" class="gradient-security text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition inline-block">
                    Saiba Mais
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Differentials Section -->
<section class="py-16 bg-gray-900 text-white px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Por Que Escolher Hineni</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-800 rounded-lg p-8">
                <div class="text-4xl mb-4">👥</div>
                <h3 class="text-xl font-bold mb-4">Equipe Especializada</h3>
                <p class="text-gray-300">Profissionais experientes com certificações internacionais em segurança e desenvolvimento.</p>
            </div>
            <div class="bg-gray-800 rounded-lg p-8">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-bold mb-4">Resultados Comprovados</h3>
                <p class="text-gray-300">Mais de 50 projetos entregues com ROI documentado e alta taxa de satisfação dos clientes.</p>
            </div>
            <div class="bg-gray-800 rounded-lg p-8">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-4">Suporte 24/7</h3>
                <p class="text-gray-300">Disponibilidade contínua para resolver problemas e responder dúvidas rapidamente.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final Section -->
<section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Pronto para Transformar Seu Negócio?</h2>
        <p class="text-xl mb-8 opacity-90">Fale com nossos especialistas e descubra como podemos ajudar seu negócio a crescer com segurança e inovação.</p>
        <a href="/contato.php" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition inline-block">
            Agendar Consulta Gratuita
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
